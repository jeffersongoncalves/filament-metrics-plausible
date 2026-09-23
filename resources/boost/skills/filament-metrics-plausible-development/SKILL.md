---
name: filament-metrics-plausible-development
description: Build and work with the Filament Metrics Plausible plugin — Plausible Analytics dashboard widgets, the settings page for API key and site ID, and custom breakdown widgets.
---

# Filament Metrics Plausible Development

## When to use this skill

Use this skill when:
- Showing Plausible Analytics data in a Filament panel
- Adding or customizing Plausible widgets
- Debugging "not configured" or API errors in the Plausible widgets

## Package Overview

- **Package**: `jeffersongoncalves/filament-metrics-plausible` (branch `3.x` for Filament 5.x)
- **Namespace**: `JeffersonGoncalves\Filament\MetricsPlausible`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^3.0`, `jeffersongoncalves/laravel-metrics-plausible:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\MetricsPlausible\PlausibleMetricsServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\MetricsPlausible\PlausibleMetricsPlugin;

$panel->plugins([
    PlausibleMetricsPlugin::make(),
]);
```

```bash
php artisan vendor:publish --tag=metrics-plausible-settings-migrations
php artisan migrate
```

## Custom Breakdown Widget

```php
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\BreakdownTableWidget;
use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopEntryPagesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string { return 'Entry pages'; }

    protected function tableLabelHeader(): string { return 'Page'; }

    protected function tableColumns(): array { return ['visitors' => 'Visitors']; }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->entryPages(limit: 10);
    }
}
```

## Settings Fields

| Field | Description |
|-------|-------------|
| `api_key` | Plausible Stats API key |
| `site_id` | Site domain as registered in Plausible |
| `base_url` | `https://plausible.io` or your self-hosted URL |

## Troubleshooting

- **"Not configured"**: save both `api_key` and `site_id` in the settings page.
- **Error message in a widget**: the Plausible API rejected the call (bad key, wrong site ID or base URL); the message comes straight from the API client.
- **Stale numbers**: results are cached for 5 minutes (15 seconds for realtime visitors).
