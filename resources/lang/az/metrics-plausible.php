<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics parametrləri',
    'sections' => [
        'api_configuration' => 'API konfiqurasiyası',
        'advanced_settings' => 'Qabaqcıl parametrlər',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API açarı',
            'helper' => 'Plausible Stats API açarı. Onu Plausible-da Settings > API Keys bölməsində yaradın.',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Saytınızın Plausible-da qeydiyyatdan keçmiş domeni (məs. example.com).',
        ],
        'base_url' => [
            'label' => 'Əsas URL',
            'helper' => 'Plausible nümunəsinin URL-i. Plausible Cloud üçün https://plausible.io və ya öz host etdiyiniz nümunənin URL-i.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hazırda ziyarətçilər',
            'visitors' => 'Unikal ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
            'bounce_rate' => 'İmtina dərəcəsi',
            'visit_duration' => 'Ziyarət müddəti',
        ],
        'visitors_chart' => [
            'label' => 'Ziyarətçilər və səhifə baxışları (son 30 gün)',
            'visitors' => 'Ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
        ],
        'top_pages' => [
            'label' => 'Ən populyar səhifələr',
            'page' => 'Səhifə',
        ],
        'top_sources' => [
            'label' => 'Əsas mənbələr',
            'source' => 'Mənbə',
        ],
        'top_countries' => [
            'label' => 'Ən çox ölkələr',
            'country' => 'Ölkə',
        ],
        'top_browsers' => [
            'label' => 'Ən populyar brauzerlər',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyarətçilər',
        'pageviews' => 'Səhifə baxışları',
        'bounce_rate' => 'İmtina dərəcəsi',
        'percentage' => 'Pay',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Birbaşa / Yoxdur',
        'unknown' => 'Naməlum',
        'not_configured' => 'Konfiqurasiya edilməyib',
        'not_configured_description' => 'Plausible API açarını və sayt ID-ni Parametrlərdə konfiqurasiya edin.',
        'no_data' => 'Məlumat yoxdur',
        'error' => 'Məlumat yüklənərkən xəta',
    ],
];
