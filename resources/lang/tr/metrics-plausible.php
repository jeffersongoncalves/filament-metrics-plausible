<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Plausible Analytics ayarları',
    'sections' => [
        'api_configuration' => 'API yapılandırması',
        'advanced_settings' => 'Gelişmiş ayarlar',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API anahtarı',
            'helper' => 'Bir Plausible Stats API anahtarı. Plausible\'da Settings > API Keys altında oluşturun.',
        ],
        'site_id' => [
            'label' => 'Site kimliği',
            'helper' => 'Sitenizin Plausible\'da kayıtlı alan adı (ör. example.com).',
        ],
        'base_url' => [
            'label' => 'Temel URL',
            'helper' => 'Plausible örneğinin URL\'si. Plausible Cloud için https://plausible.io veya kendi barındırdığınız örneğin URL\'sini kullanın.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Şu anki ziyaretçiler',
            'visitors' => 'Tekil ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
            'bounce_rate' => 'Hemen çıkma oranı',
            'visit_duration' => 'Ziyaret süresi',
        ],
        'visitors_chart' => [
            'label' => 'Ziyaretçiler ve sayfa görüntülemeleri (son 30 gün)',
            'visitors' => 'Ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
        ],
        'top_pages' => [
            'label' => 'En popüler sayfalar',
            'page' => 'Sayfa',
        ],
        'top_sources' => [
            'label' => 'En önemli kaynaklar',
            'source' => 'Kaynak',
        ],
        'top_countries' => [
            'label' => 'En çok ülkeler',
            'country' => 'Ülke',
        ],
        'top_browsers' => [
            'label' => 'En popüler tarayıcılar',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyaretçiler',
        'pageviews' => 'Sayfa görüntülemeleri',
        'bounce_rate' => 'Hemen çıkma oranı',
        'percentage' => 'Pay',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Doğrudan / Yok',
        'unknown' => 'Bilinmiyor',
        'not_configured' => 'Yapılandırılmadı',
        'not_configured_description' => 'Plausible API anahtarını ve site kimliğini Ayarlar\'da yapılandırın.',
        'no_data' => 'Veri yok',
        'error' => 'Veriler yüklenirken hata oluştu',
    ],
];
