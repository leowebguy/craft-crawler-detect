# Release Notes for Crawler Detect

All notable changes to this project will be documented in this file.

## 2.1.0 - 2026.10.30
### Added
- Extended PHP compatibility to support `^8.2 || ^8.3 || ^8.4 || ^8.5`
- Twig helper methods `getMatches()` and `getUserAgent()` exposed on `craft.crawlerDetect`
- PHPStan Level 8 static analysis configuration (`phpstan.neon`)
- Development scripts for code style test (`pint-test`) and static analysis (`stan`)

### Changed
- Required Craft CMS `^5.0.0`
- Updated `composer.json` metadata for full schema compliance (`documentationUrl`, `developer`)
- Modernized type signatures with explicit return types and PHP 8.4-compliant explicit nullability (`?string $param = null`)
- Formatted codebase to PSR-12 standard via Laravel Pint

## 2.0.0 - 2024.03.26
### Craft 5, PHP 8.2

## 1.0.3 - 2023.03.24
### Cleanup, PHP 8.1

## 1.0.2 - 2022.05.09
### Craft 4

## 1.0.1 - 2021.04.02
### Lint, bugfix

## 1.0.0 - 2020.03.02
### Initial release
- Craft plugin initial release
