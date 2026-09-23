<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Widgets;

use JeffersonGoncalves\MetricsPlausible\Plausible;

class TopDevicesWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.widgets.top_devices.label');
    }

    protected function fetchRows(Plausible $plausible): array
    {
        return $plausible->devices(limit: 8);
    }
}
