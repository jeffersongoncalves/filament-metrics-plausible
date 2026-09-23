<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics 设置',
    'sections' => [
        'api_configuration' => 'API 配置',
        'advanced_settings' => '高级设置',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API 密钥',
            'helper' => 'Plausible Stats API 密钥，可在 Plausible 的 Settings > API Keys 中创建。',
        ],
        'site_id' => [
            'label' => '站点 ID',
            'helper' => '你的网站在 Plausible 中注册的域名（例如 example.com）。',
        ],
        'base_url' => [
            'label' => '基础 URL',
            'helper' => 'Plausible 实例的 URL。Plausible Cloud 请使用 https://plausible.io，自托管请使用你的实例 URL。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '当前在线访客',
            'visitors' => '独立访客',
            'pageviews' => '页面浏览量',
            'bounce_rate' => '跳出率',
            'visit_duration' => '访问时长',
        ],
        'visitors_chart' => [
            'label' => '访客与页面浏览量（最近 30 天）',
            'visitors' => '访客',
            'pageviews' => '页面浏览量',
        ],
        'top_pages' => [
            'label' => '热门页面',
            'page' => '页面',
        ],
        'top_sources' => [
            'label' => '主要来源',
            'source' => '来源',
        ],
        'top_countries' => [
            'label' => '主要国家/地区',
            'country' => '国家/地区',
        ],
        'top_browsers' => [
            'label' => '主要浏览器',
        ],
        'top_devices' => [
            'label' => '设备',
        ],
        'visitors' => '访客',
        'pageviews' => '页面浏览量',
        'bounce_rate' => '跳出率',
        'percentage' => '占比',
        'last_30_days' => '最近 30 天',
        'direct' => '直接访问 / 无',
        'unknown' => '未知',
        'not_configured' => '未配置',
        'not_configured_description' => '请在设置中配置 Plausible API 密钥和站点 ID。',
        'no_data' => '暂无数据',
        'error' => '加载数据时出错',
    ],
];
