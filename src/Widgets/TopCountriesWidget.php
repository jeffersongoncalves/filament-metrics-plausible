<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use JeffersonGoncalves\MetricsPlausible\Enums\Dimension;
use JeffersonGoncalves\MetricsPlausible\Enums\Metric;
use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopCountriesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_countries.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_countries.country');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-plausible::metrics-plausible.widgets.visitors'),
            'percentage' => __('filament-metrics-plausible::metrics-plausible.widgets.percentage'),
        ];
    }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->breakdown(Dimension::CountryName, metrics: [Metric::Visitors, Metric::Percentage], limit: 10);
    }
}
