<?php

use Miniflux\Router;
use Miniflux\Response;
use Miniflux\Request;
use Miniflux\Template;
use Miniflux\Helper;
use Miniflux\Model;

// Display search by text results page
Router\get_action('search', function() {

    $text = Request\param('text', '');
    $offset = Request\int_param('offset', 0);

    $items = array();
    $nb_items = 0;
    if ($text) {
        $items = Model\Search\get_all_items($text, $offset, Model\Config\get('items_per_page'));
        $nb_items = Model\Search\count_items($text);
    }

    Response\html(Template\layout('search', array(
        'favicons' => Model\Favicon\get_item_favicons($items),
        'original_marks_read' => Model\Config\get('original_marks_read'),
        'text' => $text,
        'items' => $items,
        'order' => '',
        'direction' => '',
        'display_mode' => Model\Config\get('items_display_mode'),
        'item_title_link' => Model\Config\get('item_title_link'),
        'group_id' => array(),
        'nb_items' => $nb_items,
        'nb_unread_items' => Model\Item\count_by_status('unread'),
        'offset' => $offset,
        'items_per_page' => Model\Config\get('items_per_page'),
        'nothing_to_read' => Request\int_param('nothing_to_read'),
        'menu' => 'search',
        'title' => t('Search').' ('.$nb_items.')'
    )));
});

// Display search by tag results page
Router\get_action('search-tag', function() {

    $tag_id = Request\param('tag_id', 0);
    $offset = Request\int_param('offset', 0);

    $tag = Model\Tag\get($tag_id);

    $items = array();
    $nb_items = 0;
    if ($tag_id) {
        $items = Model\Search\get_all_items_with_tag($tag_id, $offset, Model\Config\get('items_per_page'));
        $nb_items = Model\Search\count_items_with_tag($tag_id);
    }

    Response\html(Template\layout('search_tag', array(
        'favicons' => Model\Favicon\get_item_favicons($items),
        'original_marks_read' => Model\Config\get('original_marks_read'),
        'tag_id' => $tag_id,
        'tag_title' => isset($tag['title']) ? $tag['title'] : '',
        'tags' => Model\Tag\get_all(),
        'items' => $items,
        'order' => '',
        'direction' => '',
        'display_mode' => Model\Config\get('items_display_mode'),
        'item_title_link' => Model\Config\get('item_title_link'),
        'group_id' => array(),
        'nb_items' => $nb_items,
        'nb_unread_items' => Model\Item\count_by_status('unread'),
        'offset' => $offset,
        'items_per_page' => Model\Config\get('items_per_page'),
        'nothing_to_read' => Request\int_param('nothing_to_read'),
        'menu' => 'search',
        'title' => t('Search').' ('.$nb_items.')'
    )));
});
