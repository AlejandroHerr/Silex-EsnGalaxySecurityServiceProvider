<?php
namespace AlejandroHerr\Silex\EsnGalaxy\Cas\ResponseParser;

use Symfony\Component\DomCrawler\Crawler;

interface CasResponseParserInterface
{
    public function getTokenData(Crawler $response);
}
