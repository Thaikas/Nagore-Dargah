<?php
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Darshan &mdash; <?= e($SITE['name']) ?></title>
    <meta name="description" content="Live feed of the Nagore Dargah Shariff shrine — continuous darshan from Nagore, Tamil Nadu.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cormorant+Garamond:wght@600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        // Encourage a dedicated window when launched directly.
        try { if (window.opener === null && window.name === '') { window.name = 'NagoreLiveTV'; } } catch (e) {}
    </script>
</head>
<body class="live-page">
<div class="live-wrap">

    <header class="live-top">
        <a class="brand" href="index.php" target="_blank" rel="noopener" style="color:#fff">
            <span class="brand__mark" style="color:var(--gold-500);width:40px;height:40px">
                <svg viewBox="0 0 80 80" aria-hidden="true"><g fill="currentColor">
                    <rect x="22" y="30" width="5" height="40" rx="1"/><circle cx="24.5" cy="26" r="3.8"/>
                    <rect x="53" y="30" width="5" height="40" rx="1"/><circle cx="55.5" cy="26" r="3.8"/>
                    <path d="M40 8c-2.4 3-3.6 6-3.6 9 0 .1-3.4 2.6-3.4 8.5 0 4 2.4 6.8 2.4 6.8h9.2s2.4-2.8 2.4-6.8c0-5.9-3.4-8.4-3.4-8.5 0-3-1.2-6-3.6-9z"/>
                    <path d="M27 70V44c0-7.2 5.8-13 13-13s13 5.8 13 13v26z"/><rect x="14" y="70" width="52" height="5" rx="1"/>
                </g></svg>
            </span>
            <span class="brand__text"><span class="brand__name" style="color:#fff">Nagore Dargah</span><span class="brand__sub">Live Darshan</span></span>
        </a>
        <span class="live-badge"><span class="dot"></span> Live</span>
    </header>

    <main class="live-stage">
        <div style="width:min(1100px,100%)">
            <div class="live-frame">
                <?php if (!empty($LIVE['embed'])): ?>
                    <iframe
                        src="<?= e($LIVE['embed']) ?>"
                        title="Nagore Dargah Live Darshan"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                <?php else: ?>
                    <div style="display:grid;place-items:center;height:100%;color:#9fc1b2;text-align:center;padding:2rem">
                        <p>The live stream link is being configured.<br>Please visit the official channel below.</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="live-foot">
                <p style="margin:.6rem 0">Continuous live feed of the holy shrine, <em>Insha&rsquo;Allah</em>. If the stream does not load,
                    <a href="<?= e($LIVE['url']) ?>" target="_blank" rel="noopener" style="color:var(--gold-400)">open the official channel &nearr;</a>.
                </p>
                <p style="opacity:.7">&copy; <?= date('Y') ?> <?= e($SITE['name']) ?> &middot; <?= e($LIVE['channel']) ?></p>
            </div>
        </div>
    </main>
</div>
</body>
</html>
