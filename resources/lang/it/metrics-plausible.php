<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Impostazioni di Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Configurazione API',
        'advanced_settings' => 'Impostazioni avanzate',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chiave API',
            'helper' => 'Una chiave della Stats API di Plausible. Creala in Plausible in Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID sito',
            'helper' => 'Il dominio del tuo sito come registrato in Plausible (ad es. example.com).',
        ],
        'base_url' => [
            'label' => 'URL di base',
            'helper' => 'URL dell\'istanza Plausible. Usa https://plausible.io per Plausible Cloud o l\'URL della tua istanza self-hosted.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitatori in questo momento',
            'visitors' => 'Visitatori unici',
            'pageviews' => 'Visualizzazioni',
            'bounce_rate' => 'Frequenza di rimbalzo',
            'visit_duration' => 'Durata della visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitatori e visualizzazioni (ultimi 30 giorni)',
            'visitors' => 'Visitatori',
            'pageviews' => 'Visualizzazioni',
        ],
        'top_pages' => [
            'label' => 'Pagine principali',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Sorgenti principali',
            'source' => 'Sorgente',
        ],
        'top_countries' => [
            'label' => 'Paesi principali',
            'country' => 'Paese',
        ],
        'top_browsers' => [
            'label' => 'Browser principali',
        ],
        'top_devices' => [
            'label' => 'Dispositivi',
        ],
        'visitors' => 'Visitatori',
        'pageviews' => 'Visualizzazioni',
        'bounce_rate' => 'Frequenza di rimbalzo',
        'percentage' => 'Quota',
        'last_30_days' => 'Ultimi 30 giorni',
        'direct' => 'Diretto / Nessuno',
        'unknown' => 'Sconosciuto',
        'not_configured' => 'Non configurato',
        'not_configured_description' => 'Configura la chiave API e l\'ID sito di Plausible nelle Impostazioni.',
        'no_data' => 'Nessun dato disponibile',
        'error' => 'Errore durante il caricamento dei dati',
    ],
];
