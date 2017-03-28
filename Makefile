.PHONY: archive
.PHONY: docker-image
.PHONY: js
.PHONY: unit-test-sqlite
.PHONY: unit-test-postgres
.PHONY: unit-test-mysql
.PHONY: sync-locales
.PHONY: find-locales

CSS_FILE = assets/css/app.min.css
JS_FILE = assets/js/app.min.js
IMAGE = miniflux/miniflux
TAG = latest

docker-image:
	@ ./hooks/build

css: $(CSS_FILE)

$(CSS_FILE): assets/css/app.css
	@ npm install
	@ cat $^ | ./node_modules/.bin/cleancss -o $@

js: $(JS_FILE)

$(JS_FILE): assets/js/src/app.js \
	assets/js/src/feed.js \
	assets/js/src/item.js \
	assets/js/src/event.js \
	assets/js/src/nav.js \
	assets/js/src/tag.js
	@ yarn install || npm install
	@ ./node_modules/.bin/jshint assets/js/src/*.js
	@ cat $^ | node_modules/.bin/uglifyjs - > $@
	@ echo "Miniflux.App.Run();" >> $@

# Build a new archive: make archive version=1.2.3 dst=/tmp
archive:
	@ git archive --format=zip --prefix=miniflux/ v${version} -o ${dst}/miniflux-${version}.zip

functional-test-sqlite:
	@ rm -f data/db.sqlite
	@ ./vendor/bin/phpunit -c tests/phpunit.functional.sqlite.xml

unit-test-sqlite:
	@ ./vendor/bin/phpunit -c tests/phpunit.unit.sqlite.xml

unit-test-postgres:
	@ ./vendor/bin/phpunit -c tests/phpunit.unit.postgres.xml

unit-test-mysql:
	@ ./vendor/bin/phpunit -c tests/phpunit.unit.mysql.xml

sync-locales:
	@ php scripts/sync-locales.php

find-locales:
	@ php scripts/find-locales.php
