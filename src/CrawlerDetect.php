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

namespace leowebguy\crawlerdetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\crawlerdetect\variables\CrawlerDetectVariable;
use yii\base\Event;

/**
 * Class CrawlerDetect
 */
class CrawlerDetect extends Plugin
{
    // Properties
    // =========================================================================

    public static $plugin;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function(Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('crawlerDetect', CrawlerDetectVariable::class);
            }
        );

        Craft::info(
            'Crawler Detect plugin loaded',
            __METHOD__
        );
    }
}
