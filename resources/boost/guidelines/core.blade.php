## Filament Metrics Plausible

Plausible Analytics dashboard widgets for Filament with a settings page powered by Spatie Laravel Settings. Works with Plausible Cloud and self-hosted instances through the Stats API v2.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-metrics-plausible:"^2.0"
php artisan vendor:publish --tag=metrics-plausible-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\MetricsPlausible\PlausibleMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PlausibleMetricsPlugin::make()
                // ->settingsPage(false)
                // ->widgets(false)
                ,
        ]);
}
</code-snippet>
@endverbatim

### Widgets
- `RealtimeVisitorsWidget` — visitors right now + 30-day totals (15s cache for realtime)
- `VisitorsChartWidget` — daily visitors and pageviews
- `TopPagesWidget`, `TopSourcesWidget`, `TopCountriesWidget` — top-10 tables (extend `BreakdownTableWidget`)
- `TopBrowsersWidget`, `TopDevicesWidget` — doughnut charts (extend `BreakdownChartWidget`)

### Architecture
- `PlausibleMetricsPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin`, registers `PlausibleMetricsSettingsPage` and the widgets
- Widgets use the `InteractsWithPlausible` concern: configuration check, `Plausible` service and 5-minute cache keyed per site
- Settings: `JeffersonGoncalves\MetricsPlausible\Settings\PlausibleSettings` (`api_key`, `site_id`, `base_url`)
- Translations live under `filament-metrics-plausible::metrics-plausible.*`

### Best Practices
- Add a new breakdown table by extending `BreakdownTableWidget` and implementing `tableHeading()`, `tableLabelHeader()`, `tableColumns()` and `fetchRows()`
- Widgets show a "not configured" message until the API key and site ID are saved
