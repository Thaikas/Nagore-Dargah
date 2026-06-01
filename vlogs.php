<?php
$page_title = 'Vlogs & Links';
$page_desc  = 'Watch vlogs, documentaries and devotional videos about Nagore Dargah Shariff, and find useful links to official channels and resources.';
require __DIR__ . '/includes/header.php';

$vlogs = [
    [
        'title' => '5 Minarats History',
        'desc'  => '5 மினாராக்கள் வரலாறு',
        'id'    => '0qA5lUjozRo'
    ],
    [
        'title' => 'Chain',
        'desc'  => 'சங்கிலி',
        'id'    => 'ofprwfr50-0'
    ],
    [
        'title' => 'Kombu Thaengai',
        'desc'  => 'கொம்பு தேங்காய்',
        'id'    => '8ttKbS0_HJs'
    ],
    [
        'title' => 'Mirror Nahoor shareef',
        'desc'  => 'புனித கண்ணாடி',
        'id'    => 'U-i5hDzyQyQ'
    ],
    [
        'title' => 'Mudhubak shareef',
        'desc'  => 'முதுபக் ஷரீஃப்',
        'id'    => 'NggrToXZTGM'
    ],
    [
        'title' => 'Peer Mandabam',
        'desc'  => 'பீர் மண்டபம்',
        'id'    => 'tIXEJYt4oGg'
    ],
    [
        'title' => 'Ya Hussain Masjid',
        'desc'  => 'யா ஹுஸைன் மஸ்ஜித்',
        'id'    => 'KKM0VFN2wE4'
    ]
];
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Vlogs &amp; Links</p>
        <h1>Vlogs &amp; Links</h1>
        <p>Devotional videos, documentaries and trusted resources about the Dargah</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Watch</span>
            <h2>Vlogs &amp; Videos</h2>
            <p>Explore the sacred heritage and historic relics of Nagore Dargah through these documentary videos.</p>
        </div>
        <div class="grid grid--3">
            <?php foreach ($vlogs as $v): ?>
                <a class="vlog reveal" href="https://youtu.be/<?= e($v['id']) ?>" target="_blank" rel="noopener">
                    <div class="vlog__thumb" style="background-image: url('https://img.youtube.com/vi/<?= e($v['id']) ?>/hqdefault.jpg'); background-size: cover; background-position: center;">
                        <span class="vlog__play"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></span>
                    </div>
                    <div class="vlog__body">
                        <h4><?= e($v['title']) ?></h4>
                        <p><?= e($v['desc']) ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Official Channels &amp; Resources</span>
            <h2>Useful Links</h2>
        </div>
        <div class="link-list reveal" style="max-width:760px;margin:0 auto">
            <a class="link-row" href="<?= e($SOCIAL['youtube']) ?>" target="_blank" rel="noopener">
                <span class="ic"><svg viewBox="0 0 24 24"><path d="M23 12s0-3.3-.4-4.9a2.6 2.6 0 0 0-1.8-1.8C19.1 5 12 5 12 5s-7.1 0-8.8.3A2.6 2.6 0 0 0 1.4 7.1C1 8.7 1 12 1 12s0 3.3.4 4.9a2.6 2.6 0 0 0 1.8 1.8C4.9 19 12 19 12 19s7.1 0 8.8-.3a2.6 2.6 0 0 0 1.8-1.8C23 15.3 23 12 23 12zM9.8 15.3V8.7l5.7 3.3-5.7 3.3z"/></svg></span>
                <div style="flex:1"><strong>YouTube Channel</strong><small>Live darshan, Uroos coverage &amp; devotional videos</small></div>
                <span style="color:var(--gold-600)">&nearr;</span>
            </a>
            <a class="link-row" href="<?= e($SOCIAL['facebook']) ?>" target="_blank" rel="noopener">
                <span class="ic"><svg viewBox="0 0 24 24"><path d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H7v3h3v6h3v-6h3l1-3h-4v-2c0-.6.4-1 1-1z"/></svg></span>
                <div style="flex:1"><strong>Facebook Page</strong><small>News, announcements &amp; photos</small></div>
                <span style="color:var(--gold-600)">&nearr;</span>
            </a>
            <a class="link-row" href="live-tv.php" target="_blank" rel="noopener">
                <span class="ic"><svg viewBox="0 0 24 24"><path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z"/></svg></span>
                <div style="flex:1"><strong>Live TV — Shrine Darshan</strong><small>Opens the live feed in a new window</small></div>
                <span style="color:var(--gold-600)">&nearr;</span>
            </a>
            <a class="link-row" href="downloads.php">
                <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 3v10l3.5-3.5L17 11l-5 5-5-5 1.5-1.5L12 13V3h0zM5 19h14v2H5z"/></svg></span>
                <div style="flex:1"><strong>Downloads</strong><small>Calendars, brochures &amp; prayer guides</small></div>
                <span style="color:var(--gold-600)">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
