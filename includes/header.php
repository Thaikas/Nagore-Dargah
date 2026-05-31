<?php
require_once __DIR__ . '/config.php';

// Each page may set these before including the header.
$page_title = $page_title ?? $SITE['name'];
$page_desc  = $page_desc  ?? $SITE['description'];
$body_class = $body_class ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($page_desc) ?>">
    <meta name="theme-color" content="#0a4d3c">
    <title><?= e($page_title) ?> &mdash; <?= e($SITE['name']) ?></title>

    <!-- Social / Open Graph -->
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($SITE['name']) ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Cormorant+Garamond:wght@500;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?= e($body_class) ?>">

<!-- Top utility bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <span class="topbar__item">
            <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
            Nagore, Tamil Nadu&nbsp;611002
        </span>
        <span class="topbar__sep">•</span>
        <a class="topbar__item" href="tel:<?= e($CONTACT['phone_raw']) ?>">
            <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.3 1l-2.2 2.2z"/></svg>
            <?= e($CONTACT['phone']) ?>
        </a>
        <span class="topbar__spacer"></span>
        <span class="topbar__bismillah" lang="ar" dir="rtl">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</span>
    </div>
</div>

<!-- Header / Navigation -->
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">
        <a class="brand" href="index.php" aria-label="<?= e($SITE['name']) ?> home">
            <span class="brand__mark">
                <svg viewBox="0 0 80 80" aria-hidden="true">
                    <!-- Dargah silhouette: central dome flanked by minarets -->
                    <g fill="currentColor">
                        <rect x="6"  y="40" width="5" height="30" rx="1"/>
                        <circle cx="8.5" cy="37" r="3.5"/>
                        <rect x="69" y="40" width="5" height="30" rx="1"/>
                        <circle cx="71.5" cy="37" r="3.5"/>
                        <rect x="22" y="30" width="5" height="40" rx="1"/>
                        <circle cx="24.5" cy="26" r="3.8"/>
                        <rect x="53" y="30" width="5" height="40" rx="1"/>
                        <circle cx="55.5" cy="26" r="3.8"/>
                        <path d="M40 8c-2.4 3-3.6 6-3.6 9 0 .1-3.4 2.6-3.4 8.5 0 4 2.4 6.8 2.4 6.8h9.2s2.4-2.8 2.4-6.8c0-5.9-3.4-8.4-3.4-8.5 0-3-1.2-6-3.6-9z"/>
                        <path d="M27 70V44c0-7.2 5.8-13 13-13s13 5.8 13 13v26z"/>
                        <rect x="14" y="70" width="52" height="5" rx="1"/>
                    </g>
                </svg>
            </span>
            <span class="brand__text">
                <span class="brand__name">Nagore Dargah</span>
                <span class="brand__sub">Shariff &middot; ناكور</span>
            </span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="primaryNav">
            <span></span><span></span><span></span>
        </button>

        <nav class="primary-nav" id="primaryNav" aria-label="Primary">
            <ul>
                <?php foreach ($NAV as $item): ?>
                    <li>
                        <a
                            href="<?= e($item['url']) ?>"
                            class="<?= nd_is_active($item['url']) ? 'is-active' : '' ?> <?= !empty($item['cta']) ? 'nav-cta' : '' ?>"
                            <?php if (!empty($item['window'])): ?>target="_blank" rel="noopener"<?php endif; ?>
                        >
                            <?= e($item['label']) ?>
                            <?php if (!empty($item['window'])): ?>
                                <svg class="ico ico--ext" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 3h7v7h-2V6.4l-9.3 9.3-1.4-1.4L17.6 5H14V3zM5 5h5v2H7v10h10v-3h2v5H5V5z"/></svg>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
