<?php

use JeffersonGoncalves\Filament\MetricsPlausible\Concerns\InteractsWithPlausible;
use JeffersonGoncalves\MetricsPlausible\Data\StatsRow;
use JeffersonGoncalves\MetricsPlausible\Settings\PlausibleSettings;

function plausibleProbe(): object
{
    return new class
    {
        use InteractsWithPlausible;

        public function configured(): bool
        {
            return $this->isPlausibleConfigured();
        }

        /**
         * @param  list<StatsRow>  $rows
         * @return list<array<string, mixed>>
         */
        public function flatten(array $rows): array
        {
            return $this->rowsToArray($rows);
        }
    };
}

it('detects when plausible is not configured', function () {
    expect(plausibleProbe()->configured())->toBeFalse();
});

it('detects when plausible is configured', function () {
    $settings = app(PlausibleSettings::class);
    $settings->api_key = 'test-key';
    $settings->site_id = 'example.com';
    $settings->save();

    expect(plausibleProbe()->configured())->toBeTrue();
});

it('flattens stats rows into label + metrics arrays', function () {
    $rows = [
        new StatsRow('/pricing', ['event:page' => '/pricing'], ['visitors' => 12, 'pageviews' => 30]),
    ];

    expect(plausibleProbe()->flatten($rows))->toBe([
        ['label' => '/pricing', 'visitors' => 12, 'pageviews' => 30],
    ]);
});
