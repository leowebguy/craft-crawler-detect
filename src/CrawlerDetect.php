<?php
/**
 * CrawlerDetect Plugin for Craft 3.
 *
 * @author Leo Leoncio
 */

namespace leowebguy\crawlerdetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\crawlerdetect\variables\CrawlerDetectVariable;
use yii\base\Event;

/**
 * CrawlerDetect.
 */
class CrawlerDetect extends Plugin
{
    public static $plugin;

    /**
     * init.
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('crawlerDetect', CrawlerDetectVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'crawler-detect',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
