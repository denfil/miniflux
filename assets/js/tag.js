Miniflux.Tag = (function() {
    function _on(element, eventName, handler) {
        if (element.addEventListener) {
            element.addEventListener(eventName, handler, false);
        } else if (element.attachEvent) {
            element.attachEvent("on" + eventName, handler);
        } else {
            element["on" + eventName] = handler;
        }
    }

    function _trim(str) {
        return str.replace(/^\s+|\s+$/g, "");
    }

    function _post(url, data, success) {
        var params = typeof data == "string"
            ? data
            : Object.keys(data).map(function(k){return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])}).join("&");
	    var xhr = window.XMLHttpRequest
	        ? new XMLHttpRequest()
	        : new ActiveXObject("Microsoft.XMLHTTP");
	    xhr.open("POST", url);
	    xhr.onreadystatechange = function() {
	        if (xhr.readyState > 3 && xhr.status == 200) {
	            success(xhr.responseText);
            }
	    };
	    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
	    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	    xhr.setRequestHeader("Content-length", params.length);
	    xhr.send(params);
	    return xhr;
    }

    var TagList = function (container) {
        this.itemId = container.getAttribute("data-item-id");
        this.tagsContainer = container.querySelector(".tag-list");
        this.tags = this.parseTags();
        this.editCntrl = container.querySelector(".tags-link-edit");
        this.addCntrl = container.querySelector(".item-tag-add");
        this.tagInput = this.addCntrl.querySelector("input");

        var cancelCntrl = this.addCntrl.querySelector(".tags-link-cancel");

        var self = this,

            enableEditMode = function () {
                self.editCntrl.style.display = 'none';
                self.addCntrl.style.display = 'inline-block';
                self.tagsContainer.innerHTML = "";
                self.tagInput.value = "";
                self.tagInput.focus();
                if (self.tags.length == 0) {
                    return;
                }
                var result = "";
                for (var i = 0, cnt = self.tags.length; i < cnt; i++) {
                    result += '<div data-tag-id="' + self.tags[i].id + '">'
                        + self.tags[i].title + '<span class="item-tag-remove"></span></div>';
                }
                self.tagsContainer.innerHTML = result;
                var removeLinks = self.tagsContainer.querySelectorAll(".item-tag-remove");
                for (var i = 0, cnt = removeLinks.length; i < cnt; i++) {
                    _on(removeLinks[i], "click", removeTag);
                }
            },

            disableEditMode = function () {
                self.editCntrl.style.display = 'inline-block';
                self.addCntrl.style.display = 'none';
                self.tagsContainer.innerHTML = "";
                if (self.tags.length == 0) {
                    return;
                }
                var result = [];
                for (var i = 0, cnt = self.tags.length; i < cnt; i++) {
                    result.push('<a href="?action=search-tag&tag_id=' + self.tags[i].id + '">'
                        + self.tags[i].title + '</a>');
                }
                self.tagsContainer.innerHTML = result.join(", ");
            },

            addTag = function (e) {
                var keyCode = e.keyCode ? e.keyCode : e.which;
                if (keyCode == 27) {
                    disableEditMode();
                    return;
                }
                if (keyCode != 13) {
                    return;
                }
                self.tagInput.setAttribute("disabled", "disabled");
                var url = "?action=add-item-tag&item_id=" + self.itemId
                        + "&tag_title=" + encodeURIComponent(_trim(this.value));
                _post(url, "", function (result) {
                    var response = JSON.parse(result);
                    if (response.tags) {
                        self.tags = response.tags;
                        enableEditMode();
                    }
                    self.tagInput.removeAttribute("disabled");
                });
            },

            removeTag = function () {
                var url = "?action=remove-item-tag&item_id=" + self.itemId
                    + "&tag_id=" + this.parentNode.getAttribute("data-tag-id");
                _post(url, "", function (result) {
                    var response = JSON.parse(result);
                    if (response.tags) {
                        self.tags = response.tags;
                        enableEditMode();
                    }
                });
            };

        _on(this.editCntrl, "click", enableEditMode);
        _on(this.tagInput, "keydown", addTag);
        _on(cancelCntrl, "click", disableEditMode);
    };

    TagList.prototype.parseTags = function () {
        var result = [],
            tagLinks = this.tagsContainer.querySelectorAll("a");
        if (tagLinks.length == 0) {
            return result;
        }
        for (var i = 0, cnt = tagLinks.length; i < cnt; i++) {
            result.push({
                "id": tagLinks[i].getAttribute("data-tag-id"),
                "title": tagLinks[i].innerHTML
            });
        }
        return result;
    };

    return {
        Init: function () {
            var tagList = document.querySelectorAll(".item-tags");
            if (tagList.length !== 0) {
                for (var i = 0, cnt = tagList.length; i < cnt; i++) {
                    new TagList(tagList[i]);
                }
            }
        }
    };
})();
