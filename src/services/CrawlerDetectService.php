<?php
namespace leowebguy\crawlerdetect\services;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

use craft\base\Component;

/**
 * Class CrawlerDetectService
 */
class CrawlerDetectService extends Component
{
    private $_crawlerDetect;

    /**
     * @return Crawler_Detect|null
     */
    public function getCrawlerDetect()
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
