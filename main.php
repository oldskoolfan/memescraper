<?php

require __DIR__ . '/vendor/autoload.php';

use MemeScraper\MemeScraper;

$scraper = new MemeScraper();

$crawler = $scraper->get4ChanVideoGameBoard();

var_dump($crawler);