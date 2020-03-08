<?php
namespace leowebguy\crawlerdetect\variables;

use leowebguy\crawlerdetect\CrawlerDetect;

/**
 * Class CrawlerDetectVariable
 */
class CrawlerDetectVariable
{
    public function getCrawlerDetect()
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getgetCrawlerDetect();
    }
    public function isCrawler($userAgent = null)
    {
        return CrawlerDetect::$plugin->crawlerDetectService->getCrawlerDetect()->isCrawler($userAgent);
    }
}
