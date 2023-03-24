<?php
/**
 * CrawlerDetect Plugin for Craft
 * Craft twig expension for detecting bots/crawlers/spiders
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2023, leowebguy
 * @license    MIT
 */

namespace leowebguy\crawlerdetect\variables;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

class DetectVariable
{
    // Properties
    // =========================================================================

    private CrawlerDetect $crawlerDetect;

    // Construct
    // =========================================================================

    public function __construct()
    {
        $this->crawlerDetect = new CrawlerDetect();
    }

    /**
     * @return string
     */
    public function getCrawlerDetect(): string
    {
        return $this->crawlerDetect;
    }

    /**
     * @param $userAgent
     * @return bool
     */
    public function isCrawler($userAgent = null): bool
    {
        return $this->crawlerDetect->isCrawler($userAgent);
    }
}
