<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Concerns\InteractsWithPlausible;
use JeffersonGoncalves\MetricsPlausible\Data\StatsRow;
use JeffersonGoncalves\MetricsPlausible\Plausible;

/**
 * Doughnut chart of visitors for a single Plausible breakdown (browsers, devices...).
 */
abstract class BreakdownChartWidget extends ChartWidget
{
    use InteractsWithPlausible;

    protected int|string|array $columnSpan = 1;

    protected ?string $maxHeight = '300px';

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(Plausible $plausible): array;

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $empty = ['datasets' => [], 'labels' => []];

        if (! $this->isPlausibleConfigured()) {
            return $empty;
        }

        try {
            $rows = $this->cachedPlausibleCall(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getPlausible())));

            if ($rows === []) {
                return $empty;
            }

            return [
                'datasets' => [
                    [
                        'data' => array_map(fn (array $row): int => (int) ($row['visitors'] ?? 0), $rows),
                        'backgroundColor' => [
                            '#6366f1', '#f59e0b', '#10b981', '#ef4444',
                            '#8b5cf6', '#06b6d4', '#f97316', '#ec4899',
                        ],
                    ],
                ],
                'labels' => array_map(fn (array $row): string => $row['label'] !== '' ? $row['label'] : __('filament-metrics-plausible::metrics-plausible.widgets.unknown'), $rows),
            ];
        } catch (\Throwable) {
            return $empty;
        }
    }
}
