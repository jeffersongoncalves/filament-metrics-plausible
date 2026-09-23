<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics-instellingen',
    'sections' => [
        'api_configuration' => 'API-configuratie',
        'advanced_settings' => 'Geavanceerde instellingen',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-sleutel',
            'helper' => 'Een Plausible Stats API-sleutel. Maak er een aan in Plausible onder Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Het domein van je site zoals geregistreerd in Plausible (bijv. example.com).',
        ],
        'base_url' => [
            'label' => 'Basis-URL',
            'helper' => 'URL van de Plausible-instantie. Gebruik https://plausible.io voor Plausible Cloud of de URL van je zelfgehoste instantie.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Bezoekers op dit moment',
            'visitors' => 'Unieke bezoekers',
            'pageviews' => 'Paginaweergaven',
            'bounce_rate' => 'Bouncepercentage',
            'visit_duration' => 'Bezoekduur',
        ],
        'visitors_chart' => [
            'label' => 'Bezoekers en paginaweergaven (laatste 30 dagen)',
            'visitors' => 'Bezoekers',
            'pageviews' => 'Paginaweergaven',
        ],
        'top_pages' => [
            'label' => 'Toppagina\'s',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Topbronnen',
            'source' => 'Bron',
        ],
        'top_countries' => [
            'label' => 'Toplanden',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Topbrowsers',
        ],
        'top_devices' => [
            'label' => 'Apparaten',
        ],
        'visitors' => 'Bezoekers',
        'pageviews' => 'Paginaweergaven',
        'bounce_rate' => 'Bouncepercentage',
        'percentage' => 'Aandeel',
        'last_30_days' => 'Laatste 30 dagen',
        'direct' => 'Direct / Geen',
        'unknown' => 'Onbekend',
        'not_configured' => 'Niet geconfigureerd',
        'not_configured_description' => 'Configureer de Plausible-API-sleutel en site-ID in Instellingen.',
        'no_data' => 'Geen gegevens beschikbaar',
        'error' => 'Fout bij het laden van gegevens',
    ],
];
