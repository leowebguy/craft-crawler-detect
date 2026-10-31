<?php

namespace leowebguy\crawlerdetect\variables;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

class DetectVariable
{
    private CrawlerDetect $crawlerDetect;

    public function __construct()
    {
        $this->crawlerDetect = new CrawlerDetect();
    }

    public function getCrawlerDetect(): CrawlerDetect
    {
        return $this->crawlerDetect;
    }

    public function isCrawler(?string $userAgent = null): bool
    {
        return $this->crawlerDetect->isCrawler($userAgent);
    }

    public function getMatches(): ?string
    {
        return $this->crawlerDetect->getMatches();
    }

    public function getUserAgent(): ?string
    {
        return $this->crawlerDetect->getUserAgent();
    }
}
