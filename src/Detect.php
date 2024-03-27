<?php
/**
 * CrawlerDetect Plugin for Craft
 * Craft twig expension for detecting bots/crawlers/spiders
 *
 * @author     Leo Leoncio
 * @see        https://github.com/leowebguy
 * @copyright  Copyright (c) 2023, leowebguy
 */

namespace leowebguy\crawlerdetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\crawlerdetect\variables\DetectVariable;
use yii\base\Event;

class Detect extends Plugin
{
    public bool $hasCpSection = false;

    public bool $hasCpSettings = false;

    public function init()
    {
        parent::init();

        if (!$this->isInstalled) {
            return;
        }

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function(Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('crawlerDetect', DetectVariable::class);
            }
        );

        Craft::info(
            'Crawler Detect plugin loaded',
            __METHOD__
        );
    }
}
