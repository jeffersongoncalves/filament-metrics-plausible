<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use Filament\Widgets\Widget;
use JeffersonGoncalves\Filament\MetricsPlausible\Concerns\InteractsWithPlausible;
use JeffersonGoncalves\MetricsPlausible\Data\StatsRow;
use JeffersonGoncalves\MetricsPlausible\Plausible;

/**
 * Top-N table for a single Plausible breakdown (pages, sources, countries...).
 */
abstract class BreakdownTableWidget extends Widget
{
    use InteractsWithPlausible;

    protected static string $view = 'filament-metrics-plausible::widgets.breakdown-table';

    protected int|string|array $columnSpan = 1;

    abstract protected function tableHeading(): string;

    /**
     * Metric columns to show after the label column, as [metric key => header].
     *
     * @return array<string, string>
     */
    abstract protected function tableColumns(): array;

    abstract protected function tableLabelHeader(): string;

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(Plausible $plausible): array;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        $base = [
            'heading' => $this->tableHeading(),
            'labelHeader' => $this->tableLabelHeader(),
            'columns' => $this->tableColumns(),
            'configured' => $this->isPlausibleConfigured(),
            'error' => null,
            'data' => [],
        ];

        if (! $base['configured']) {
            return $base;
        }

        try {
            $base['data'] = $this->cachedPlausibleCall(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getPlausible())));
        } catch (\Throwable $e) {
            $base['error'] = $e->getMessage();
        }

        return $base;
    }
}
