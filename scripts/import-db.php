<?php

require_once __DIR__ . '/../app/common.php';

use Miniflux\Helper;
use Miniflux\Model;

if (php_sapi_name() !== 'cli') {
    exit('This script can run only from the command line.' . PHP_EOL);
}

class Import {
    private $src;

    private $dst;

    public function __construct($srcFile) {
        $this->src = new PDO('sqlite:' . $srcFile);
        $this->src->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db = PicoDb\Database::getInstance('db');
        $this->dst = $db->getConnection();
    }

    public function run() {
        try {
            $this->dst->beginTransaction();

            $this->copy_feeds();
            $this->copy_items();
            $this->copy_favicons();
            //$this->copy_groups();

            $this->dst->commit();
            echo 'Completed' . PHP_EOL;
        } catch (PDOException $e) {
            $this->dst->rollBack();
            echo $e->getMessage() . PHP_EOL;
        }
    }

    private function copy_feeds() {
        $rq = $this->dst->prepare('INSERT INTO feeds
          (id, user_id, feed_url, site_url, title, enabled, download_content, rtl, cloak_referrer)
          VALUES
          (?, 1, ?, ?, ?, ?, ?, ?, ?)
        ');
        $feeds = $this->get_table('feeds');
        foreach ($feeds as $feed) {
            $rq->execute(array(
                $feed['id'],
                $feed['feed_url'],
                $feed['site_url'],
                $feed['title'],
                isset($feed['enabled']) ? (int) $feed['enabled'] : 1,
                isset($feed['download_content']) ? (int) $feed['download_content'] : 0,
                isset($feed['rtl']) ? (int) $feed['rtl'] : 0,
                isset($feed['cloak_referrer']) ? (int) $feed['cloak_referrer'] : 0,
            ));
        }
    }

    private function copy_items() {
        $rq = $this->dst->prepare('INSERT INTO items
          (user_id, feed_id, checksum, status, bookmark, url, title, author, content, updated, enclosure_url, enclosure_type, language)
          VALUES
          (1, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');
        $items = $this->get_table('items');
        foreach ($items as $item) {
            $rq->execute(array(
                $item['feed_id'],
                $item['id'],
                $item['status'],
                isset($item['bookmark']) ? (int) $item['bookmark'] : 0,
                $item['url'],
                $item['title'],
                $item['author'],
                $item['content'],
                isset($item['updated']) ? (int) $item['updated'] : 0,
                $item['enclosure'],
                $item['enclosure_type'],
                $item['language'],
            ));
        }
    }

    private function copy_favicons() {
        $rq = $this->dst->prepare('INSERT INTO favicons
          (id, hash, type)
          VALUES
          (?, ?, ?)
        ');
        $favicons = $this->get_table('favicons');
        foreach ($favicons as $favicon) {
            $rq->execute(array(
                $favicon['id'],
                $favicon['hash'],
                $favicon['type'],
            ));
        }

        $rq = $this->dst->prepare('INSERT INTO favicons_feeds
          (feed_id, favicon_id)
          VALUES
          (?, ?)
        ');
        $favicons_feeds = $this->get_table('favicons_feeds');
        foreach ($favicons_feeds as $row) {
            $rq->execute(array(
                $row['feed_id'],
                $row['favicon_id'],
            ));
        }
    }

    private function copy_groups() {
        $rq = $this->dst->prepare('INSERT INTO groups
          (id, user_id, title)
          VALUES
          (?, 1, ?)
        ');
        $groups = $this->get_table('groups');
        foreach ($groups as $group) {
            $rq->execute(array(
                $group['id'],
                $group['title'],
            ));
        }

        $rq = $this->dst->prepare('INSERT INTO feeds_groups
          (feed_id, group_id)
          VALUES
          (?, ?)
        ');
        $feeds_groups = $this->get_table('feeds_groups');
        foreach ($feeds_groups as $row) {
            $rq->execute(array(
                $row['feed_id'],
                $row['group_id'],
            ));
        }
    }

    private function get_table($table) {
        $rq = $this->src->prepare('SELECT * FROM '.$table);
        $rq->execute();
        return $rq->fetchAll(PDO::FETCH_ASSOC);
    }
}

$src_file = __DIR__ . '/../data/_db.sqlite';
(new Import($src_file))->run();
