<?php

use JeffersonGoncalves\Filament\MetricsPlausible\Pages\PlausibleMetricsSettingsPage;

it('can render the settings page', function () {
    $this->get(PlausibleMetricsSettingsPage::getUrl())
        ->assertSuccessful();
})->skip('Requires authenticated user');

it('has the correct navigation label', function () {
    expect(PlausibleMetricsSettingsPage::getNavigationLabel())
        ->toBe('Plausible Analytics');
});
