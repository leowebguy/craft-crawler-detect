<?php
/**
 * CrawlerDetect Plugin for Craft
 * Craft twig expension for detecting bots/crawlers/spiders
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2021, leowebguy
 * @license    MIT
 */

namespace leowebguy\crawlerdetect\variables;

use leowebguy\crawlerdetect\CrawlerDetect;

/**
 * Class CrawlerDetectVariable
 */
class CrawlerDetectVariable
{
    /**
     * getCrawlerDetect
     *
     * @return string
     */
    public function getCrawlerDetect(): string
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getCrawlerDetect();
    }

    /**
     * isCrawler
     *
     * @param mixed $userAgent
     * @return bool
     */
    public function isCrawler($userAgent = null): bool
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getCrawlerDetect()->isCrawler($userAgent);
    }
}
