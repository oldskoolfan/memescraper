<?php

namespace MemeScraper;

use Goutte\Client;
use GuzzleHttp\Exception\ConnectException;
use Symfony\Component\DomCrawler\Crawler;

class MemeScraper extends Client
{
    public function get4ChanVideoGameBoard() : Crawler {
        $crawler = null;
        try {
            $crawler = $this->request('GET', 'http://boards.4chansss.org/v/');
            return $crawler;
        } catch (ConnectException $ex) {
            $crawler = new Crawler($ex->getMessage());
        } finally {
            return $crawler;
        }
    }
}