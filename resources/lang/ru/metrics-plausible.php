<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Настройки Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Настройка API',
        'advanced_settings' => 'Расширенные настройки',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-ключ',
            'helper' => 'Ключ Stats API Plausible. Создайте его в Plausible в разделе Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID сайта',
            'helper' => 'Домен вашего сайта, зарегистрированный в Plausible (например, example.com).',
        ],
        'base_url' => [
            'label' => 'Базовый URL',
            'helper' => 'URL экземпляра Plausible. Используйте https://plausible.io для Plausible Cloud или URL вашего собственного экземпляра.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Посетителей сейчас',
            'visitors' => 'Уникальные посетители',
            'pageviews' => 'Просмотры',
            'bounce_rate' => 'Показатель отказов',
            'visit_duration' => 'Длительность визита',
        ],
        'visitors_chart' => [
            'label' => 'Посетители и просмотры (последние 30 дней)',
            'visitors' => 'Посетители',
            'pageviews' => 'Просмотры',
        ],
        'top_pages' => [
            'label' => 'Популярные страницы',
            'page' => 'Страница',
        ],
        'top_sources' => [
            'label' => 'Основные источники',
            'source' => 'Источник',
        ],
        'top_countries' => [
            'label' => 'Основные страны',
            'country' => 'Страна',
        ],
        'top_browsers' => [
            'label' => 'Популярные браузеры',
        ],
        'top_devices' => [
            'label' => 'Устройства',
        ],
        'visitors' => 'Посетители',
        'pageviews' => 'Просмотры',
        'bounce_rate' => 'Показатель отказов',
        'percentage' => 'Доля',
        'last_30_days' => 'Последние 30 дней',
        'direct' => 'Прямой заход / Нет',
        'unknown' => 'Неизвестно',
        'not_configured' => 'Не настроено',
        'not_configured_description' => 'Укажите API-ключ и ID сайта Plausible в настройках.',
        'no_data' => 'Нет данных',
        'error' => 'Ошибка загрузки данных',
    ],
];
