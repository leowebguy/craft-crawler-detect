<?php

namespace leowebguy\crawlerdetect;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use leowebguy\crawlerdetect\variables\DetectVariable;
use yii\base\Event;

/**
 * CrawlerDetect Plugin for Craft
 *
 * @method static Detect|null getInstance()
 */
class Detect extends Plugin
{
    public bool $hasCpSection = false;

    public bool $hasCpSettings = false;

    public function init(): void
    {
        parent::init();

        if (!$this->isInstalled) {
            return;
        }

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            static function (Event $event): void {
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
