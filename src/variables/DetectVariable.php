<?php
/**
 * CrawlerDetect Plugin for Craft
 * Craft twig expension for detecting bots/crawlers/spiders
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2023, leowebguy
 */

namespace leowebguy\crawlerdetect\variables;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

class DetectVariable
{
    private CrawlerDetect $crawlerDetect;

    public function __construct()
    {
        $this->crawlerDetect = new CrawlerDetect;
    }

    public function getCrawlerDetect(): CrawlerDetect
    {
        return $this->crawlerDetect;
    }

    public function isCrawler($userAgent = null): bool
    {
        return $this->crawlerDetect->isCrawler($userAgent);
    }
}
