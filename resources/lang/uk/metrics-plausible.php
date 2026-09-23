<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Налаштування Plausible Analytics',
    'sections' => [
        'api_configuration' => 'Налаштування API',
        'advanced_settings' => 'Розширені налаштування',
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-ключ',
            'helper' => 'Ключ Stats API Plausible. Створіть його в Plausible у розділі Settings > API Keys.',
        ],
        'site_id' => [
            'label' => 'ID сайту',
            'helper' => 'Домен вашого сайту, зареєстрований у Plausible (наприклад, example.com).',
        ],
        'base_url' => [
            'label' => 'Базовий URL',
            'helper' => 'URL екземпляра Plausible. Використовуйте https://plausible.io для Plausible Cloud або URL власного екземпляра.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Відвідувачів зараз',
            'visitors' => 'Унікальні відвідувачі',
            'pageviews' => 'Перегляди',
            'bounce_rate' => 'Показник відмов',
            'visit_duration' => 'Тривалість візиту',
        ],
        'visitors_chart' => [
            'label' => 'Відвідувачі та перегляди (останні 30 днів)',
            'visitors' => 'Відвідувачі',
            'pageviews' => 'Перегляди',
        ],
        'top_pages' => [
            'label' => 'Популярні сторінки',
            'page' => 'Сторінка',
        ],
        'top_sources' => [
            'label' => 'Основні джерела',
            'source' => 'Джерело',
        ],
        'top_countries' => [
            'label' => 'Основні країни',
            'country' => 'Країна',
        ],
        'top_browsers' => [
            'label' => 'Популярні браузери',
        ],
        'top_devices' => [
            'label' => 'Пристрої',
        ],
        'visitors' => 'Відвідувачі',
        'pageviews' => 'Перегляди',
        'bounce_rate' => 'Показник відмов',
        'percentage' => 'Частка',
        'last_30_days' => 'Останні 30 днів',
        'direct' => 'Прямий захід / Немає',
        'unknown' => 'Невідомо',
        'not_configured' => 'Не налаштовано',
        'not_configured_description' => 'Вкажіть API-ключ і ID сайту Plausible у налаштуваннях.',
        'no_data' => 'Немає даних',
        'error' => 'Помилка завантаження даних',
    ],
];
