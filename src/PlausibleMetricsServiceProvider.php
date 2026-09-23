<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlausibleMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-metrics-plausible')
            ->hasTranslations()
            ->hasViews();
    }
}
