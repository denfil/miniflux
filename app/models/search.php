<?php

namespace Miniflux\Model\Search;

use PicoDb\Database;
use Miniflux\Model\Tag;

function count_items($text)
{
    return Database::getInstance('db')
        ->table('items')
        ->neq('status', 'removed')
        ->ilike('title', '%' . $text . '%')
        ->count();
}

function get_all_items($text, $offset = null, $limit = null)
{
    $items = Database::getInstance('db')
        ->table('items')
        ->columns(
            'items.id',
            'items.title',
            'items.updated',
            'items.url',
            'items.enclosure',
            'items.enclosure_type',
            'items.bookmark',
            'items.feed_id',
            'items.status',
            'items.content',
            'items.language',
            'items.author',
            'feeds.site_url',
            'feeds.title AS feed_title',
            'feeds.rtl'
        )
        ->join('feeds', 'id', 'feed_id')
        ->neq('status', 'removed')
        ->ilike('items.title', '%' . $text . '%')
        ->orderBy('updated', 'desc')
        ->offset($offset)
        ->limit($limit)
        ->findAll();
    $itemIds = array();
    foreach ($items as $item) {
        $itemIds[] = $item['id'];
    }
    $tags = Tag\get_items_tags_map($itemIds);
    foreach ($items as &$item) {
        $itemId = $item['id'];
        $item['tags'] = isset($tags[$itemId]) ? $tags[$itemId] : array();
    }
    return $items;
}

function count_items_with_tag($tag_id)
{
    return Database::getInstance('db')
        ->table('items')
        ->join('items_tags', 'item_id', 'id')
        ->neq('status', 'removed')
        ->eq('tag_id', $tag_id)
        ->count();
}

function get_all_items_with_tag($tag_id, $offset = null, $limit = null)
{
    $items = Database::getInstance('db')
        ->table('items')
        ->columns(
            'items.id',
            'items.title',
            'items.updated',
            'items.url',
            'items.enclosure',
            'items.enclosure_type',
            'items.bookmark',
            'items.feed_id',
            'items.status',
            'items.content',
            'items.language',
            'items.author',
            'feeds.site_url',
            'feeds.title AS feed_title',
            'feeds.rtl'
        )
        ->join('items_tags', 'item_id', 'id')
        ->join('feeds', 'id', 'feed_id')
        ->neq('status', 'removed')
        ->eq('tag_id', $tag_id)
        ->orderBy('updated', 'desc')
        ->offset($offset)
        ->limit($limit)
        ->findAll();
    $itemIds = array();
    foreach ($items as $item) {
        $itemIds[] = $item['id'];
    }
    $tags = Tag\get_items_tags_map($itemIds);
    foreach ($items as &$item) {
        $itemId = $item['id'];
        $item['tags'] = isset($tags[$itemId]) ? $tags[$itemId] : array();
    }
    return $items;
}
