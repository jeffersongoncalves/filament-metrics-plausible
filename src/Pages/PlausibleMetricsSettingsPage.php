<?php

namespace JeffersonGoncalves\Filament\MetricsPlausible\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\MetricsPlausible\Settings\PlausibleSettings;

class PlausibleMetricsSettingsPage extends SettingsPage
{
    protected static string $settings = PlausibleSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('filament-metrics-plausible::metrics-plausible.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-metrics-plausible::metrics-plausible.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make(__('filament-metrics-plausible::metrics-plausible.sections.api_configuration'))
                    ->schema([
                        TextInput::make('api_key')
                            ->label(__('filament-metrics-plausible::metrics-plausible.fields.api_key.label'))
                            ->helperText(__('filament-metrics-plausible::metrics-plausible.fields.api_key.helper'))
                            ->password()
                            ->revealable()
                            ->required(),

                        TextInput::make('site_id')
                            ->label(__('filament-metrics-plausible::metrics-plausible.fields.site_id.label'))
                            ->helperText(__('filament-metrics-plausible::metrics-plausible.fields.site_id.helper'))
                            ->placeholder('example.com')
                            ->required(),
                    ]),

                Section::make(__('filament-metrics-plausible::metrics-plausible.sections.advanced_settings'))
                    ->schema([
                        TextInput::make('base_url')
                            ->label(__('filament-metrics-plausible::metrics-plausible.fields.base_url.label'))
                            ->helperText(__('filament-metrics-plausible::metrics-plausible.fields.base_url.helper'))
                            ->url()
                            ->default('https://plausible.io')
                            ->required(),
                    ])
                    ->collapsed(),
            ]);
    }
}
