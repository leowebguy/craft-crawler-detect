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

namespace leowebguy\crawlerdetect\services;

use craft\base\Component;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

/**
 * Class CrawlerDetectService
 *
 * @property-read void|\Jaybizzle\CrawlerDetect\CrawlerDetect $crawlerDetect
 */
class CrawlerDetectService extends Component
{
    /**
     * _crawlerDetect
     *
     * @var mixed
     */
    private $_crawlerDetect;

    /**
     * getCrawlerDetect
     */
    public function getCrawlerDetect()
    {
        if (null === $this->_crawlerDetect) {
            $this->_crawlerDetect = new CrawlerDetect();
        }

        return $this->_crawlerDetect;
    }

    /**
     * isCrawler
     *
     * @param mixed|null $userAgent
     * @return bool
     */
    public function isCrawler($userAgent = null): bool
    {
        return $this->getCrawlerDetect()->isCrawler($userAgent);
    }
}
