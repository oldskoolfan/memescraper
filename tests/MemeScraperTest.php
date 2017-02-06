<?php


use MemeScraper\MemeScraper;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class MemeScraperTest extends TestCase
{
    public function testGet4ChanVideoGameBoard()
    {
        $scraper = new MemeScraper();
        $crawler = $scraper->get4ChanVideoGameBoard();
        $this->assertInstanceOf(Crawler::class, $crawler, 'Problem getting 4Chan Video Game Board!');
    }
}
