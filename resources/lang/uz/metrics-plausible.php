<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics sozlamalari',
    'sections' => [
        'api_configuration' => 'API konfiguratsiyasi',
        'advanced_settings' => 'Kengaytirilgan sozlamalar',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API kaliti',
            'helper' => 'Plausible Stats API kaliti. Uni Plausibleʼda Settings > API Keys boʻlimida yarating.',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Saytingizning Plausibleʼda roʻyxatdan oʻtgan domeni (masalan, example.com).',
        ],
        'base_url' => [
            'label' => 'Asosiy URL',
            'helper' => 'Plausible nusxasi URL manzili. Plausible Cloud uchun https://plausible.io yoki oʻzingiz joylashtirgan nusxa URLʼidan foydalaning.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hozirgi tashrif buyuruvchilar',
            'visitors' => 'Noyob tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
            'bounce_rate' => 'Rad etish darajasi',
            'visit_duration' => 'Tashrif davomiyligi',
        ],
        'visitors_chart' => [
            'label' => 'Tashrif buyuruvchilar va sahifa koʻrishlari (oxirgi 30 kun)',
            'visitors' => 'Tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
        ],
        'top_pages' => [
            'label' => 'Eng mashhur sahifalar',
            'page' => 'Sahifa',
        ],
        'top_sources' => [
            'label' => 'Asosiy manbalar',
            'source' => 'Manba',
        ],
        'top_countries' => [
            'label' => 'Asosiy mamlakatlar',
            'country' => 'Mamlakat',
        ],
        'top_browsers' => [
            'label' => 'Eng mashhur brauzerlar',
        ],
        'top_devices' => [
            'label' => 'Qurilmalar',
        ],
        'visitors' => 'Tashrif buyuruvchilar',
        'pageviews' => 'Sahifa koʻrishlari',
        'bounce_rate' => 'Rad etish darajasi',
        'percentage' => 'Ulush',
        'last_30_days' => 'Oxirgi 30 kun',
        'direct' => 'Toʻgʻridan-toʻgʻri / Yoʻq',
        'unknown' => 'Nomaʼlum',
        'not_configured' => 'Sozlanmagan',
        'not_configured_description' => 'Plausible API kaliti va sayt IDʼni Sozlamalarda sozlang.',
        'no_data' => 'Maʼlumot yoʻq',
        'error' => 'Maʼlumotlarni yuklashda xato',
    ],
];
