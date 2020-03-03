<?php
namespace leowebguy\crawlerdetect\variables;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

/**
 * Class CrawlerDetectVariable
 */
class CrawlerDetectVariable
{
    private $_crawlerDetect = null;

    /**
     * @return Crawler_Detect|null
     */
    public function getCrawlerDetect ()
    {
        if ( $this->_crawlerDetect === null ) {
            $this->_crawlerDetect = new CrawlerDetect();
        }

        return $this->_crawlerDetect;
    }

    /**
     * Returns true for any crawler device
     * @param null $userAgent
     * @return bool
     */
    public function isCrawler ($userAgent = null)
    {
        return $this->getCrawlerDetect()->isCrawler($userAgent);
    }
}
