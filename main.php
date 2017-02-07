<?php

require __DIR__ . '/vendor/autoload.php';

use MemeScraper\MemeScraper;
use Symfony\Component\DomCrawler\Crawler;

$scraper = new MemeScraper();

$crawler = $scraper->get4ChanVideoGameBoard();

$imgs = $crawler->filter('div.thread')->each(function(Crawler $node, int $i) {
    $href = $node->filter('div.fileText a')->attr('href');
    $summary = $node->filter('span.summary');
    if ($summary->count() === 0) {
        $comments = $node->filter('div.replyContainer')->count();
    } else {
        $comments = (int)substr($summary->text(), 0, strpos($summary->text(), ' '));
    }
    return [
        'href' => $href,
        'comments' => $comments,
    ];
});

var_dump($imgs);