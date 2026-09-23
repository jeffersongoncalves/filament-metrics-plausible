<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics सेटिंग्स',
    'sections' => [
        'api_configuration' => 'API कॉन्फ़िगरेशन',
        'advanced_settings' => 'उन्नत सेटिंग्स',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API कुंजी',
            'helper' => 'Plausible Stats API कुंजी। इसे Plausible में Settings > API Keys के अंतर्गत बनाएँ।',
        ],
        'site_id' => [
            'label' => 'साइट ID',
            'helper' => 'Plausible में पंजीकृत आपकी साइट का डोमेन (जैसे example.com)।',
        ],
        'base_url' => [
            'label' => 'बेस URL',
            'helper' => 'Plausible इंस्टेंस का URL। Plausible Cloud के लिए https://plausible.io या अपने सेल्फ-होस्टेड इंस्टेंस का URL उपयोग करें।',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'अभी आगंतुक',
            'visitors' => 'अद्वितीय आगंतुक',
            'pageviews' => 'पेज व्यू',
            'bounce_rate' => 'बाउंस दर',
            'visit_duration' => 'विज़िट अवधि',
        ],
        'visitors_chart' => [
            'label' => 'आगंतुक और पेज व्यू (पिछले 30 दिन)',
            'visitors' => 'आगंतुक',
            'pageviews' => 'पेज व्यू',
        ],
        'top_pages' => [
            'label' => 'शीर्ष पेज',
            'page' => 'पेज',
        ],
        'top_sources' => [
            'label' => 'शीर्ष स्रोत',
            'source' => 'स्रोत',
        ],
        'top_countries' => [
            'label' => 'शीर्ष देश',
            'country' => 'देश',
        ],
        'top_browsers' => [
            'label' => 'शीर्ष ब्राउज़र',
        ],
        'top_devices' => [
            'label' => 'डिवाइस',
        ],
        'visitors' => 'आगंतुक',
        'pageviews' => 'पेज व्यू',
        'bounce_rate' => 'बाउंस दर',
        'percentage' => 'हिस्सा',
        'last_30_days' => 'पिछले 30 दिन',
        'direct' => 'डायरेक्ट / कोई नहीं',
        'unknown' => 'अज्ञात',
        'not_configured' => 'कॉन्फ़िगर नहीं है',
        'not_configured_description' => 'सेटिंग्स में Plausible API कुंजी और साइट ID कॉन्फ़िगर करें।',
        'no_data' => 'कोई डेटा उपलब्ध नहीं',
        'error' => 'डेटा लोड करने में त्रुटि',
    ],
];
