<?php
/**
 * CrawlerDetect Plugin for Craft 3.
 *
 * @author Leo Leoncio
 */

namespace leowebguy\crawlerdetect\services;

use craft\base\Component;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

/**
 * CrawlerDetectService.
 */
class CrawlerDetectService extends Component
{
    /**
     * _crawlerDetect.
     *
     * @var mixed
     */
    private $_crawlerDetect;

    /**
     * getCrawlerDetect.
     *
     * @return void
     */
    public function getCrawlerDetect()
    {
        if (null === $this->_crawlerDetect) {
            $this->_crawlerDetect = new CrawlerDetect();
        }

        return $this->_crawlerDetect;
    }

    /**
     * isCrawler.
     *
     * @param mixed $userAgent
     *
     * @return void
     */
    public function isCrawler($userAgent = null)
    {
        return $this->getCrawlerDetect()->isCrawler($userAgent);
    }
}
