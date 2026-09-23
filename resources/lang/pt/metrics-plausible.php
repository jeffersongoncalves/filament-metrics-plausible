<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Definições do Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Configuração da API',
        'advanced_settings' => 'Definições avançadas',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chave de API',
            'helper' => 'Uma chave da Stats API do Plausible. Crie uma no Plausible em Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O domínio do seu site tal como registado no Plausible (por ex., example.com).',
        ],
        'base_url' => [
            'label' => 'URL base',
            'helper' => 'URL da instância do Plausible. Use https://plausible.io para o Plausible Cloud ou o URL da sua instância auto-alojada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes neste momento',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Visualizações de página',
            'bounce_rate' => 'Taxa de rejeição',
            'visit_duration' => 'Duração da visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes e visualizações (últimos 30 dias)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Visualizações',
        ],
        'top_pages' => [
            'label' => 'Páginas principais',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principais origens',
            'source' => 'Origem',
        ],
        'top_countries' => [
            'label' => 'Principais países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principais navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Visualizações',
        'bounce_rate' => 'Taxa de rejeição',
        'percentage' => 'Quota',
        'last_30_days' => 'Últimos 30 dias',
        'direct' => 'Direto / Nenhum',
        'unknown' => 'Desconhecido',
        'not_configured' => 'Não configurado',
        'not_configured_description' => 'Configure a chave de API e o ID do site do Plausible nas Definições.',
        'no_data' => 'Sem dados disponíveis',
        'error' => 'Erro ao carregar os dados',
    ],
];
