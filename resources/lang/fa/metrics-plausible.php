<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'تنظیمات Plausible Analytics',
    'sections' => [
        'api_configuration' => 'پیکربندی API',
        'advanced_settings' => 'تنظیمات پیشرفته',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'کلید API',
            'helper' => 'یک کلید Stats API از Plausible. آن را در Plausible بخش Settings > API Keys بسازید.',
        ],
        'site_id' => [
            'label' => 'شناسه سایت',
            'helper' => 'دامنه سایت شما همان‌طور که در Plausible ثبت شده است (مثلاً example.com).',
        ],
        'base_url' => [
            'label' => 'آدرس پایه',
            'helper' => 'آدرس نمونه Plausible. برای Plausible Cloud از https://plausible.io یا آدرس نمونه میزبانی‌شده خود استفاده کنید.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'بازدیدکنندگان در همین لحظه',
            'visitors' => 'بازدیدکنندگان یکتا',
            'pageviews' => 'بازدید صفحات',
            'bounce_rate' => 'نرخ پرش',
            'visit_duration' => 'مدت بازدید',
        ],
        'visitors_chart' => [
            'label' => 'بازدیدکنندگان و بازدید صفحات (۳۰ روز اخیر)',
            'visitors' => 'بازدیدکنندگان',
            'pageviews' => 'بازدید صفحات',
        ],
        'top_pages' => [
            'label' => 'صفحات برتر',
            'page' => 'صفحه',
        ],
        'top_sources' => [
            'label' => 'منابع برتر',
            'source' => 'منبع',
        ],
        'top_countries' => [
            'label' => 'کشورهای برتر',
            'country' => 'کشور',
        ],
        'top_browsers' => [
            'label' => 'مرورگرهای برتر',
        ],
        'top_devices' => [
            'label' => 'دستگاه‌ها',
        ],
        'visitors' => 'بازدیدکنندگان',
        'pageviews' => 'بازدید صفحات',
        'bounce_rate' => 'نرخ پرش',
        'percentage' => 'سهم',
        'last_30_days' => '۳۰ روز اخیر',
        'direct' => 'مستقیم / هیچ',
        'unknown' => 'نامشخص',
        'not_configured' => 'پیکربندی نشده',
        'not_configured_description' => 'کلید API و شناسه سایت Plausible را در تنظیمات پیکربندی کنید.',
        'no_data' => 'داده‌ای موجود نیست',
        'error' => 'خطا در بارگذاری داده‌ها',
    ],
];
