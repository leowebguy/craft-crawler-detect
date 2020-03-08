<?php
namespace leowebguy\crawlerdetect;

use leowebguy\crawlerdetect\services\CrawlerDetectService;
use leowebguy\crawlerdetect\variables\CrawlerDetectVariable;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class CrawlerDetect
 * @property  CrawlerDetectService $crawlerDetectService
 */
class CrawlerDetect extends Plugin
{
    public static $plugin;

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
                [ 'name' => $this->name ]
            ),
            __METHOD__
        );
    }

}
