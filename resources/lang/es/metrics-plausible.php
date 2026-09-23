<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Configuración de Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Configuración de la API',
        'advanced_settings' => 'Configuración avanzada',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Clave de API',
            'helper' => 'Una clave de la Stats API de Plausible. Créala en Plausible, en Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID del sitio',
            'helper' => 'El dominio de tu sitio tal como está registrado en Plausible (p. ej., example.com).',
        ],
        'base_url' => [
            'label' => 'URL base',
            'helper' => 'URL de la instancia de Plausible. Usa https://plausible.io para Plausible Cloud o la URL de tu instancia autoalojada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes ahora mismo',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Páginas vistas',
            'bounce_rate' => 'Tasa de rebote',
            'visit_duration' => 'Duración de la visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes y páginas vistas (últimos 30 días)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Páginas vistas',
        ],
        'top_pages' => [
            'label' => 'Páginas principales',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principales fuentes',
            'source' => 'Fuente',
        ],
        'top_countries' => [
            'label' => 'Principales países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principales navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Páginas vistas',
        'bounce_rate' => 'Tasa de rebote',
        'percentage' => 'Porcentaje',
        'last_30_days' => 'Últimos 30 días',
        'direct' => 'Directo / Ninguno',
        'unknown' => 'Desconocido',
        'not_configured' => 'No configurado',
        'not_configured_description' => 'Configura la clave de API y el ID del sitio de Plausible en Configuración.',
        'no_data' => 'No hay datos disponibles',
        'error' => 'Error al cargar los datos',
    ],
];
