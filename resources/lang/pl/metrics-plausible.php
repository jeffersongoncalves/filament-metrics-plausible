<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Ustawienia Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Konfiguracja API',
        'advanced_settings' => 'Ustawienia zaawansowane',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Klucz API',
            'helper' => 'Klucz Stats API Plausible. Utwórz go w Plausible w sekcji Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID witryny',
            'helper' => 'Domena witryny zarejestrowana w Plausible (np. example.com).',
        ],
        'base_url' => [
            'label' => 'Bazowy URL',
            'helper' => 'Adres URL instancji Plausible. Użyj https://plausible.io dla Plausible Cloud lub adresu własnej instancji.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Odwiedzający teraz',
            'visitors' => 'Unikalni odwiedzający',
            'pageviews' => 'Odsłony',
            'bounce_rate' => 'Współczynnik odrzuceń',
            'visit_duration' => 'Czas wizyty',
        ],
        'visitors_chart' => [
            'label' => 'Odwiedzający i odsłony (ostatnie 30 dni)',
            'visitors' => 'Odwiedzający',
            'pageviews' => 'Odsłony',
        ],
        'top_pages' => [
            'label' => 'Najpopularniejsze strony',
            'page' => 'Strona',
        ],
        'top_sources' => [
            'label' => 'Główne źródła',
            'source' => 'Źródło',
        ],
        'top_countries' => [
            'label' => 'Najczęstsze kraje',
            'country' => 'Kraj',
        ],
        'top_browsers' => [
            'label' => 'Najpopularniejsze przeglądarki',
        ],
        'top_devices' => [
            'label' => 'Urządzenia',
        ],
        'visitors' => 'Odwiedzający',
        'pageviews' => 'Odsłony',
        'bounce_rate' => 'Współczynnik odrzuceń',
        'percentage' => 'Udział',
        'last_30_days' => 'Ostatnie 30 dni',
        'direct' => 'Bezpośrednio / Brak',
        'unknown' => 'Nieznane',
        'not_configured' => 'Nieskonfigurowane',
        'not_configured_description' => 'Skonfiguruj klucz API i ID witryny Plausible w Ustawieniach.',
        'no_data' => 'Brak danych',
        'error' => 'Błąd podczas ładowania danych',
    ],
];
