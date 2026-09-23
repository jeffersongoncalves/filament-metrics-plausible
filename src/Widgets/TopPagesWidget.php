<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopPagesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_pages.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_pages.page');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-plausible::metrics-plausible.widgets.visitors'),
            'pageviews' => __('filament-metrics-plausible::metrics-plausible.widgets.pageviews'),
        ];
    }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->pages(limit: 10);
    }
}
