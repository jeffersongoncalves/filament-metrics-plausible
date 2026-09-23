<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'إعدادات Plausible Analytics',
    'sections' => [
        'api_configuration' => 'إعدادات API',
        'advanced_settings' => 'إعدادات متقدمة',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'مفتاح API',
            'helper' => 'مفتاح Stats API من Plausible. أنشئ واحدًا في Plausible ضمن Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'نطاق موقعك كما هو مسجّل في Plausible (مثل example.com).',
        ],
        'base_url' => [
            'label' => 'الرابط الأساسي',
            'helper' => 'رابط نسخة Plausible. استخدم https://plausible.io لـ Plausible Cloud أو رابط نسختك المستضافة ذاتيًا.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'الزوار الآن',
            'visitors' => 'الزوار الفريدون',
            'pageviews' => 'مشاهدات الصفحات',
            'bounce_rate' => 'معدل الارتداد',
            'visit_duration' => 'مدة الزيارة',
        ],
        'visitors_chart' => [
            'label' => 'الزوار ومشاهدات الصفحات (آخر 30 يومًا)',
            'visitors' => 'الزوار',
            'pageviews' => 'مشاهدات الصفحات',
        ],
        'top_pages' => [
            'label' => 'أهم الصفحات',
            'page' => 'الصفحة',
        ],
        'top_sources' => [
            'label' => 'أهم المصادر',
            'source' => 'المصدر',
        ],
        'top_countries' => [
            'label' => 'أهم الدول',
            'country' => 'الدولة',
        ],
        'top_browsers' => [
            'label' => 'أهم المتصفحات',
        ],
        'top_devices' => [
            'label' => 'الأجهزة',
        ],
        'visitors' => 'الزوار',
        'pageviews' => 'مشاهدات الصفحات',
        'bounce_rate' => 'معدل الارتداد',
        'percentage' => 'الحصة',
        'last_30_days' => 'آخر 30 يومًا',
        'direct' => 'مباشر / لا شيء',
        'unknown' => 'غير معروف',
        'not_configured' => 'غير مُعد',
        'not_configured_description' => 'اضبط مفتاح API ومعرّف الموقع الخاصين بـ Plausible في الإعدادات.',
        'no_data' => 'لا توجد بيانات',
        'error' => 'خطأ في تحميل البيانات',
    ],
];
