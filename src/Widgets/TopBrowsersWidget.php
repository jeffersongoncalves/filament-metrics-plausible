<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopBrowsersWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_browsers.label');
    }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->browsers(limit: 8);
    }
}
