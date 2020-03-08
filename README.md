# CrawlerDetect plugin for Craft 3

Craft 3 plugin for detecting bots/crawlers/spiders

![Screenshot](resources/icon.svg)

&nbsp;

---

### Installation

Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```

Then tell Composer to load the plugin:

```bash
composer require leowebguy/craft-crawler-detect
```

In the Control Panel, go to Settings → Plugins and click the “Install” button for Crawler Detect.

---

### Overview

A wrapper for the [CrawlerDetect](https://github.com/JayBizzle/Crawler-Detect) by Mark Beech.

---

### Usage

The plugin exposes a Crawler Detect's methods:

```twig
{{ craft.crawlerDetect.isCrawler ? 'I am a crawler.' : 'I am not crawler.' }}
```

```twig
{% if craft.crawlerDetect.isCrawler %} I am a crawler. {% endif %}
```

Also passing user agent as string:
```twig
{% if craft.crawlerDetect.isCrawler('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)') %} I am a crawler. {% endif %}
```
