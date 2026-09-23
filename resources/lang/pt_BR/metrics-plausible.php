<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Configurações do Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Configuração da API',
        'advanced_settings' => 'Configurações avançadas',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chave de API',
            'helper' => 'Uma chave da Stats API do Plausible. Crie uma no Plausible em Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O domínio do seu site conforme cadastrado no Plausible (ex.: example.com).',
        ],
        'base_url' => [
            'label' => 'URL base',
            'helper' => 'URL da instância do Plausible. Use https://plausible.io para o Plausible Cloud ou a URL da sua instância auto-hospedada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes agora',
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
            'label' => 'Páginas mais acessadas',
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
        'percentage' => 'Participação',
        'last_30_days' => 'Últimos 30 dias',
        'direct' => 'Direto / Nenhum',
        'unknown' => 'Desconhecido',
        'not_configured' => 'Não configurado',
        'not_configured_description' => 'Configure a chave de API e o ID do site do Plausible nas Configurações.',
        'no_data' => 'Nenhum dado disponível',
        'error' => 'Erro ao carregar os dados',
    ],
];
