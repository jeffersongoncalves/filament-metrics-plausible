<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible;

use Filament\Panel;
use JeffersonGoncalves\Filament\MetricsPlausible\Pages\PlausibleMetricsSettingsPage;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\RealtimeVisitorsWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\TopBrowsersWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\TopCountriesWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\TopDevicesWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\TopPagesWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\TopSourcesWidget;
use JeffersonGoncalves\Filament\MetricsPlausible\Widgets\VisitorsChartWidget;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class PlausibleMetricsPlugin extends AbstractAnalyticsPlugin
{
    protected bool $hasWidgets = true;

    public function getId(): string
    {
        return 'filament-metrics-plausible';
    }

    protected function getSettingsPageClass(): ?string
    {
        return PlausibleMetricsSettingsPage::class;
    }

    public function register(Panel $panel): void
    {
        parent::register($panel);

        if ($this->hasWidgets) {
            $panel->widgets([
                RealtimeVisitorsWidget::class,
                VisitorsChartWidget::class,
                TopPagesWidget::class,
                TopSourcesWidget::class,
                TopCountriesWidget::class,
                TopBrowsersWidget::class,
                TopDevicesWidget::class,
            ]);
        }
    }

    public function widgets(bool $condition = true): static
    {
        $this->hasWidgets = $condition;

        return $this;
    }
}
