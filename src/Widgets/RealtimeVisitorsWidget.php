<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\Filament\MetricsPlausible\Concerns\InteractsWithPlausible;

class RealtimeVisitorsWidget extends StatsOverviewWidget
{
    use InteractsWithPlausible;

    protected ?string $pollingInterval = '30s';

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        if (! $this->isPlausibleConfigured()) {
            return [
                Stat::make(
                    __('filament-metrics-plausible::metrics-plausible.widgets.not_configured'),
                    __('filament-metrics-plausible::metrics-plausible.widgets.not_configured_description'),
                ),
            ];
        }

        try {
            $realtime = $this->cachedPlausibleCall('realtime-visitors', 15, fn (): int => $this->getPlausible()->realtimeVisitors());

            $totals = $this->cachedPlausibleCall('aggregate-30d', 300, fn (): array => $this->getPlausible()->aggregate()->toArray());

            return [
                Stat::make(__('filament-metrics-plausible::metrics-plausible.widgets.realtime.current'), number_format($realtime))
                    ->icon('heroicon-o-signal'),
                Stat::make(__('filament-metrics-plausible::metrics-plausible.widgets.realtime.visitors'), number_format((int) ($totals['visitors'] ?? 0)))
                    ->description(__('filament-metrics-plausible::metrics-plausible.widgets.last_30_days'))
                    ->icon('heroicon-o-users'),
                Stat::make(__('filament-metrics-plausible::metrics-plausible.widgets.realtime.pageviews'), number_format((int) ($totals['pageviews'] ?? 0)))
                    ->description(__('filament-metrics-plausible::metrics-plausible.widgets.last_30_days'))
                    ->icon('heroicon-o-eye'),
                Stat::make(__('filament-metrics-plausible::metrics-plausible.widgets.realtime.bounce_rate'), round((float) ($totals['bounce_rate'] ?? 0)).'%')
                    ->description(__('filament-metrics-plausible::metrics-plausible.widgets.last_30_days'))
                    ->icon('heroicon-o-arrow-uturn-left'),
                Stat::make(__('filament-metrics-plausible::metrics-plausible.widgets.realtime.visit_duration'), gmdate('i:s', (int) ($totals['visit_duration'] ?? 0)))
                    ->description(__('filament-metrics-plausible::metrics-plausible.widgets.last_30_days'))
                    ->icon('heroicon-o-clock'),
            ];
        } catch (\Throwable $e) {
            return [
                Stat::make(
                    __('filament-metrics-plausible::metrics-plausible.widgets.error'),
                    $e->getMessage(),
                ),
            ];
        }
    }
}
