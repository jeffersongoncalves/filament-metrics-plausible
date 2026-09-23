<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Concerns;

use Illuminate\Support\Facades\Cache;
use JeffersonGoncalves\MetricsPlausible\Data\StatsRow;
use JeffersonGoncalves\MetricsPlausible\Plausible;
use JeffersonGoncalves\MetricsPlausible\Settings\PlausibleSettings;

trait InteractsWithPlausible
{
    protected function isPlausibleConfigured(): bool
    {
        $settings = app(PlausibleSettings::class);

        return $settings->api_key !== '' && $settings->site_id !== '';
    }

    protected function getPlausible(): Plausible
    {
        return app(Plausible::class);
    }

    /**
     * @return mixed
     */
    protected function cachedPlausibleCall(string $key, int $ttl, callable $callback)
    {
        $siteId = app(PlausibleSettings::class)->site_id;

        return Cache::remember("filament-metrics-plausible:{$siteId}:{$key}", $ttl, $callback);
    }

    /**
     * Flatten stats rows into plain arrays (label + metrics) so they cache and render cleanly.
     *
     * @param  list<StatsRow>  $rows
     * @return list<array<string, mixed>>
     */
    protected function rowsToArray(array $rows): array
    {
        return array_map(
            fn (StatsRow $row): array => ['label' => $row->label] + $row->metrics,
            $rows,
        );
    }
}
