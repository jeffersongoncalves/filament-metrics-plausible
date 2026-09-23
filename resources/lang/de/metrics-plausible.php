<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics-Einstellungen',
    'sections' => [
        'api_configuration' => 'API-Konfiguration',
        'advanced_settings' => 'Erweiterte Einstellungen',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-Schlüssel',
            'helper' => 'Ein Plausible Stats-API-Schlüssel. Erstellen Sie ihn in Plausible unter Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Die Domain Ihrer Website, wie in Plausible registriert (z. B. example.com).',
        ],
        'base_url' => [
            'label' => 'Basis-URL',
            'helper' => 'URL der Plausible-Instanz. Verwenden Sie https://plausible.io für Plausible Cloud oder die URL Ihrer selbst gehosteten Instanz.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Besucher gerade online',
            'visitors' => 'Eindeutige Besucher',
            'pageviews' => 'Seitenaufrufe',
            'bounce_rate' => 'Absprungrate',
            'visit_duration' => 'Besuchsdauer',
        ],
        'visitors_chart' => [
            'label' => 'Besucher & Seitenaufrufe (letzte 30 Tage)',
            'visitors' => 'Besucher',
            'pageviews' => 'Seitenaufrufe',
        ],
        'top_pages' => [
            'label' => 'Top-Seiten',
            'page' => 'Seite',
        ],
        'top_sources' => [
            'label' => 'Top-Quellen',
            'source' => 'Quelle',
        ],
        'top_countries' => [
            'label' => 'Top-Länder',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Top-Browser',
        ],
        'top_devices' => [
            'label' => 'Geräte',
        ],
        'visitors' => 'Besucher',
        'pageviews' => 'Seitenaufrufe',
        'bounce_rate' => 'Absprungrate',
        'percentage' => 'Anteil',
        'last_30_days' => 'Letzte 30 Tage',
        'direct' => 'Direkt / Keine',
        'unknown' => 'Unbekannt',
        'not_configured' => 'Nicht konfiguriert',
        'not_configured_description' => 'Konfigurieren Sie den Plausible-API-Schlüssel und die Site-ID in den Einstellungen.',
        'no_data' => 'Keine Daten verfügbar',
        'error' => 'Fehler beim Laden der Daten',
    ],
];
