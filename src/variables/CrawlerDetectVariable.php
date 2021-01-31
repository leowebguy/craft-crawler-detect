<?php
/**
 * CrawlerDetect Plugin for Craft 3
 * @author Leo Leoncio
 */

namespace leowebguy\crawlerdetect\variables;

use leowebguy\crawlerdetect\CrawlerDetect;

/**
 * CrawlerDetectVariable
 */
class CrawlerDetectVariable
{
    /**
     * getCrawlerDetect
     *
     * @return void
     */
    public function getCrawlerDetect()
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getgetCrawlerDetect();
    }

    /**
     * isCrawler
     *
     * @param  mixed $userAgent
     * @return void
     */
    public function isCrawler($userAgent = null)
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getCrawlerDetect()->isCrawler($userAgent);
    }
}
