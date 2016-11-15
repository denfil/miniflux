<?php

namespace Miniflux\Model\Tag;

use PicoDb\Database;


/**
 * Get tag by id
 *
 * @param integer $tag_id id of the tag
 * @return array
 */
function get($tag_id)
{
    return Database::getInstance('db')
            ->table('tags')
            ->eq('id', $tag_id)
            ->findOne();
}

/**
 * Get all tags
 *
 * @return array
 */
function get_all()
{
    return Database::getInstance('db')
            ->table('tags')
            ->orderBy('title')
            ->findAll();
}

/**
 * Get all tags assigned to item
 *
 * @param integer $item_id id of the item
 * @return array
 */
function get_item_tag_ids($item_id)
{
    return Database::getInstance('db')
            ->table('tags')
            ->join('items_tags', 'tag_id', 'id')
            ->eq('item_id', $item_id)
            ->findAllByColumn('id');
}

function get_item_tags($item_id)
{
    return Database::getInstance('db')
        ->table('tags')
        ->columns('tags.id', 'tags.title')
        ->join('items_tags', 'tag_id', 'id')
        ->eq('item_id', $item_id)
        ->findAll();
}

function get_items_tags_map(array $item_ids)
{
    $tags = Database::getInstance('db')
        ->table('tags')
        ->columns('items_tags.item_id', 'tags.id', 'tags.title')
        ->join('items_tags', 'tag_id', 'id')
        ->in('item_id', $item_ids)
        ->findAll();
    $result = array();
    foreach ($tags as $tag) {
        $itemId = $tag['item_id'];
        $result[$itemId][] = array(
            'id' => $tag['id'],
            'title' => $tag['title']
        );
    }
    return $result;
}

/**
 * Get the id of a tag
 *
 * @param string $title tag name
 * @return mixed tag id or false if not found
 */
function get_tag_id($title)
{
    return Database::getInstance('db')
            ->table('tags')
            ->eq('title', $title)
            ->findOneColumn('id');
}

/**
 * Add a tag to the Database
 *
 * Returns either the id of the new tag or the id of an existing tag with
 * the same name
 *
 * @param string $title tag name
 * @return mixed id of the created tag or false on error
 */
function create($title)
{
    $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);

    // check if the tag already exists
    $tag_id = get_tag_id($title);

    // create tag if missing
    if ($tag_id === false) {
        $data = array('title' => $title);
        $tag_id = Database::getInstance('db')
            ->table('tags')
            ->persist($data);
    }

    return $tag_id;
}

/**
 * Add tag to item
 *
 * @param integer $item_id id of the item
 * @param string $tag_title tag title
 * @return boolean true on success, false on error
 */
function add($item_id, $tag_title)
{
    $tag_id = create($tag_title);
    $item_tag_ids = get_item_tag_ids($item_id);
    if (empty($item_tag_ids) || !in_array($tag_id, $item_tag_ids)) {
        $data = array('item_id' => $item_id, 'tag_id' => $tag_id);
        $result = Database::getInstance('db')
            ->table('items_tags')
            ->insert($data);
    }
    return true;
}

/**
 * Remove tag from item
 *
 * @param string $item_id id of the item
 * @param integer $tag_id id of the tag
 * @return boolean true on success, false on error
 */
function remove($item_id, $tag_id)
{
    $result = Database::getInstance('db')
            ->table('items_tags')
            ->eq('item_id', $item_id)
            ->eq('tag_id', $tag_id)
            ->remove();

    // remove empty tags
    if ($result) {
        purge_tags();
    }

    return $result;
}

/**
 * Remove all tags from items
 *
 * @param array $item_ids ids of the item
 * @return boolean true on success, false on error
 */
function remove_by_items(array $item_ids)
{
    $result = Database::getInstance('db')
            ->table('items_tags')
            ->in('item_id', $item_ids)
            ->remove();

    // remove empty tags
    if ($result) {
        purge_tags();
    }

    return $result;
}

/**
 * Purge orphaned tags from database
 */
function purge_tags()
{
    $tags = Database::getInstance('db')
                ->table('tags')
                ->join('items_tags', 'tag_id', 'id')
                ->isNull('item_id')
                ->findAllByColumn('id');

    if (! empty($tags)) {
        Database::getInstance('db')
            ->table('tags')
            ->in('id', $tags)
            ->remove();
    }
}
