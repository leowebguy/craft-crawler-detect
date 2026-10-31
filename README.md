# CrawlerDetect plugin for Craft CMS

Craft CMS plugin for detecting bots, crawlers, and spiders.

A wrapper for [CrawlerDetect](https://github.com/JayBizzle/Crawler-Detect) by Mark Beech.

---

## Requirements

This plugin requires:
- **Craft CMS**: `^5.0.0`
- **PHP**: `^8.2 || ^8.3 || ^8.4 || ^8.5`

---

## Installation

Open your terminal and navigate to your Craft project:

```bash
cd /path/to/project
```

Then install the plugin using Composer:

```bash
composer require leowebguy/craft-crawler-detect -w
```

In the Control Panel, navigate to **Settings** → **Plugins** and click the **Install** button for **Crawler Detect**, or run:

```bash
php craft plugin/install crawler-detect
```

---

## Usage

The plugin exposes CrawlerDetect methods through the `craft.crawlerDetect` Twig variable:

### Basic Check

Check whether the current request is coming from a bot or crawler:

```twig
{{ craft.crawlerDetect.isCrawler ? 'I am a crawler.' : 'I am not a crawler.' }}
```

```twig
{% if craft.crawlerDetect.isCrawler %}
    {# Do not render analytics or track bot views #}
{% endif %}
```

### Check a Specific User-Agent

Pass an explicit user-agent string:

```twig
{% if craft.crawlerDetect.isCrawler('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)') %}
    Crawler detected: {{ craft.crawlerDetect.getMatches() }}
{% endif %}
```

### Additional Methods

- `craft.crawlerDetect.isCrawler(userAgent)`: Returns `true` if bot/crawler, `false` otherwise.
- `craft.crawlerDetect.getMatches()`: Returns matched crawler name (or `null`).
- `craft.crawlerDetect.getUserAgent()`: Returns the inspected user-agent string.
- `craft.crawlerDetect.getCrawlerDetect()`: Returns the underlying `Jaybizzle\CrawlerDetect\CrawlerDetect` instance for advanced usage.

---

## Development

Run development tools and checks:

```bash
# Check code style with ECS
composer check-cs

# Format code style with Pint
composer pint

# Verify code style with Pint
composer pint-test

# Run static analysis (PHPStan Level 8)
composer phpstan
```
