<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Paramètres de Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Configuration de l\'API',
        'advanced_settings' => 'Paramètres avancés',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Clé API',
            'helper' => 'Une clé de la Stats API de Plausible. Créez-en une dans Plausible, sous Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID du site',
            'helper' => 'Le domaine de votre site tel qu\'enregistré dans Plausible (par ex. example.com).',
        ],
        'base_url' => [
            'label' => 'URL de base',
            'helper' => 'URL de l\'instance Plausible. Utilisez https://plausible.io pour Plausible Cloud ou l\'URL de votre instance auto-hébergée.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visiteurs en ce moment',
            'visitors' => 'Visiteurs uniques',
            'pageviews' => 'Pages vues',
            'bounce_rate' => 'Taux de rebond',
            'visit_duration' => 'Durée de visite',
        ],
        'visitors_chart' => [
            'label' => 'Visiteurs et pages vues (30 derniers jours)',
            'visitors' => 'Visiteurs',
            'pageviews' => 'Pages vues',
        ],
        'top_pages' => [
            'label' => 'Pages principales',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Principales sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Principaux pays',
            'country' => 'Pays',
        ],
        'top_browsers' => [
            'label' => 'Principaux navigateurs',
        ],
        'top_devices' => [
            'label' => 'Appareils',
        ],
        'visitors' => 'Visiteurs',
        'pageviews' => 'Pages vues',
        'bounce_rate' => 'Taux de rebond',
        'percentage' => 'Part',
        'last_30_days' => '30 derniers jours',
        'direct' => 'Direct / Aucun',
        'unknown' => 'Inconnu',
        'not_configured' => 'Non configuré',
        'not_configured_description' => 'Configurez la clé API et l\'ID du site Plausible dans les Paramètres.',
        'no_data' => 'Aucune donnée disponible',
        'error' => 'Erreur lors du chargement des données',
    ],
];
