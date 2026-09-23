# Changelog

All notable changes to this project will be documented in this file.

## 1.0.0 - 2026-09-23

### First release

[Plausible Analytics](https://plausible.io) dashboard widgets for Filament, built on [`jeffersongoncalves/laravel-metrics-plausible`](https://github.com/jeffersongoncalves/laravel-metrics-plausible) (Stats API v2) and `jeffersongoncalves/filament-analytics-core`. Works with both Plausible Cloud and self-hosted instances.

- **Settings page** (Spatie Laravel Settings) for the API key, site ID and instance URL.
- **Widgets:**
  - Realtime visitors, plus unique visitors, pageviews, bounce rate and visit duration for the last 30 days.
  - Daily visitors and pageviews chart.
  - Top pages, top sources and top countries tables.
  - Browsers and devices doughnut charts.
  
- API results are cached: 15 seconds for realtime visitors, 5 minutes for everything else. Widgets show a "not configured" message until the API key and site ID are saved.
- `->settingsPage(false)` and `->widgets(false)` switch each part off. You can add your own breakdown tables by extending `BreakdownTableWidget`.
- **Translations** in 19 locales (en, pt_BR, ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN).

| Branch | Filament | Version |
|--------|----------|---------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |
