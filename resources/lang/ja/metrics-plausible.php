<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics 設定',
    'sections' => [
        'api_configuration' => 'API 設定',
        'advanced_settings' => '詳細設定',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API キー',
            'helper' => 'Plausible Stats API のキー。Plausible の Settings > API Keys で作成できます。',
        ],
        'site_id' => [
            'label' => 'サイト ID',
            'helper' => 'Plausible に登録されているサイトのドメイン（例: example.com）。',
        ],
        'base_url' => [
            'label' => 'ベース URL',
            'helper' => 'Plausible インスタンスの URL。Plausible Cloud は https://plausible.io、セルフホストの場合はその URL を使用します。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '現在の訪問者',
            'visitors' => 'ユニーク訪問者',
            'pageviews' => 'ページビュー',
            'bounce_rate' => '直帰率',
            'visit_duration' => '滞在時間',
        ],
        'visitors_chart' => [
            'label' => '訪問者とページビュー（過去 30 日間）',
            'visitors' => '訪問者',
            'pageviews' => 'ページビュー',
        ],
        'top_pages' => [
            'label' => '人気ページ',
            'page' => 'ページ',
        ],
        'top_sources' => [
            'label' => '主な流入元',
            'source' => '流入元',
        ],
        'top_countries' => [
            'label' => '上位の国',
            'country' => '国',
        ],
        'top_browsers' => [
            'label' => '主なブラウザ',
        ],
        'top_devices' => [
            'label' => 'デバイス',
        ],
        'visitors' => '訪問者',
        'pageviews' => 'ページビュー',
        'bounce_rate' => '直帰率',
        'percentage' => '割合',
        'last_30_days' => '過去 30 日間',
        'direct' => '直接 / なし',
        'unknown' => '不明',
        'not_configured' => '未設定',
        'not_configured_description' => '設定で Plausible の API キーとサイト ID を設定してください。',
        'no_data' => 'データがありません',
        'error' => 'データの読み込み中にエラーが発生しました',
    ],
];
