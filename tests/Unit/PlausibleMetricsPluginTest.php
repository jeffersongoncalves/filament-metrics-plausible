<?php

use JeffersonGoncalves\Filament\MetricsPlausible\PlausibleMetricsPlugin;

function pluginFlag(PlausibleMetricsPlugin $plugin, string $property): bool
{
    $reflection = new ReflectionProperty($plugin, $property);
    $reflection->setAccessible(true);

    return $reflection->getValue($plugin);
}

it('can be instantiated', function () {
    expect(PlausibleMetricsPlugin::make())->toBeInstanceOf(PlausibleMetricsPlugin::class);
});

it('has the correct id', function () {
    expect(PlausibleMetricsPlugin::make()->getId())->toBe('filament-metrics-plausible');
});

it('enables the settings page and widgets by default', function () {
    $plugin = PlausibleMetricsPlugin::make();

    expect(pluginFlag($plugin, 'hasSettingsPage'))->toBeTrue()
        ->and(pluginFlag($plugin, 'hasWidgets'))->toBeTrue();
});

it('can disable the settings page', function () {
    expect(pluginFlag(PlausibleMetricsPlugin::make()->settingsPage(false), 'hasSettingsPage'))->toBeFalse();
});

it('can disable the widgets', function () {
    expect(pluginFlag(PlausibleMetricsPlugin::make()->widgets(false), 'hasWidgets'))->toBeFalse();
});
