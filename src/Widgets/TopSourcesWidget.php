<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopSourcesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_sources.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_sources.source');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-plausible::metrics-plausible.widgets.visitors'),
            'bounce_rate' => __('filament-metrics-plausible::metrics-plausible.widgets.bounce_rate'),
        ];
    }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->sources(limit: 10);
    }
}
