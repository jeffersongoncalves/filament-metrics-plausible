<div class="filament-hidden">

![Filament Metrics Plausible](https://raw.githubusercontent.com/jeffersongoncalves/filament-metrics-plausible/2.x/art/jeffersongoncalves-filament-metrics-plausible.png)

</div>

# Filament Metrics Plausible

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-metrics-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-plausible)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-metrics-plausible/tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-metrics-plausible/actions?query=workflow%3ATests+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-metrics-plausible.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-plausible)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-metrics-plausible.svg?style=flat-square)](LICENSE.md)

[Plausible Analytics](https://plausible.io) dashboard widgets for Filament, with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings) to manage your Plausible API key, site ID and instance URL directly from the admin panel. Works with Plausible Cloud and self-hosted instances.

Built on top of [jeffersongoncalves/laravel-metrics-plausible](https://github.com/jeffersongoncalves/laravel-metrics-plausible) (Stats API v2).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-metrics-plausible:"^2.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=metrics-plausible-settings-migrations
php artisan migrate
```

## Usage

Add the plugin to your Filament panel provider:

```php
use JeffersonGoncalves\Filament\MetricsPlausible\PlausibleMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PlausibleMetricsPlugin::make(),
        ]);
}
```

Then open **Settings > Plausible Analytics** in your panel and fill in the API key and site ID.

### Widgets

All widgets cover the last 30 days and are cached (15s for realtime, 5 minutes for the rest):

| Widget | Shows |
|--------|-------|
| `RealtimeVisitorsWidget` | Visitors right now, unique visitors, pageviews, bounce rate and visit duration |
| `VisitorsChartWidget` | Daily visitors and pageviews line chart |
| `TopPagesWidget` | Top 10 pages by visitors |
| `TopSourcesWidget` | Top 10 traffic sources with bounce rate |
| `TopCountriesWidget` | Top 10 countries with share of visitors |
| `TopBrowsersWidget` | Browsers doughnut chart |
| `TopDevicesWidget` | Devices doughnut chart |

### Customization

```php
PlausibleMetricsPlugin::make()
    ->settingsPage(false) // hide the settings page
    ->widgets(false),     // don't register the dashboard widgets
```

With `widgets(false)` you can still place the widget classes on any page yourself.

## Requirements

- PHP 8.2 or higher
- Filament 4.x

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
