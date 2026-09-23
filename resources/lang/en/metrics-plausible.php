<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics Settings',

    'sections' => [
        'api_configuration' => 'API Configuration',
        'advanced_settings' => 'Advanced Settings',
    ],

    'fields' => [
        'api_key' => [
            'label' => 'API Key',
            'helper' => 'A Plausible Stats API key. Create one in Plausible under Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'Site ID',
            'helper' => 'The domain of your site as registered in Plausible (e.g. example.com).',
        ],
        'base_url' => [
            'label' => 'Base URL',
            'helper' => 'Plausible instance URL. Use https://plausible.io for Plausible Cloud or the URL of your self-hosted instance.',
        ],
    ],

    'widgets' => [
        'realtime' => [
            'current' => 'Visitors right now',
            'visitors' => 'Unique Visitors',
            'pageviews' => 'Pageviews',
            'bounce_rate' => 'Bounce Rate',
            'visit_duration' => 'Visit Duration',
        ],
        'visitors_chart' => [
            'label' => 'Visitors & Pageviews (Last 30 Days)',
            'visitors' => 'Visitors',
            'pageviews' => 'Pageviews',
        ],
        'top_pages' => [
            'label' => 'Top Pages',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Top Sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Top Countries',
            'country' => 'Country',
        ],
        'top_browsers' => [
            'label' => 'Top Browsers',
        ],
        'top_devices' => [
            'label' => 'Devices',
        ],
        'visitors' => 'Visitors',
        'pageviews' => 'Pageviews',
        'bounce_rate' => 'Bounce Rate',
        'percentage' => 'Share',
        'last_30_days' => 'Last 30 days',
        'direct' => 'Direct / None',
        'unknown' => 'Unknown',
        'not_configured' => 'Not Configured',
        'not_configured_description' => 'Configure your Plausible API key and site ID in Settings.',
        'no_data' => 'No data available',
        'error' => 'Error loading data',
    ],
];
