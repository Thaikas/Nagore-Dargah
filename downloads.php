<?php
$page_title = 'Downloads';
$page_desc  = 'Download resources from Nagore Dargah Shariff — the Uroos calendar, ziyarat guide, prayer booklet, wallpapers and brochures.';
require __DIR__ . '/includes/header.php';

// label, description, file, type, size
$downloads = [
    ['Uroos Calendar', 'Annual Kanduri Uroos schedule &amp; observances', 'downloads/files/uroos-calendar.txt', 'DOC', '4 KB'],
    ['Ziyarat Guide', 'How to perform ziyarat at the Dargah', 'downloads/files/ziyarat-guide.txt', 'DOC', '3 KB'],
    ['Prayer &amp; Fathiha Booklet', 'Selected duas and the Fathiha of the saint', 'downloads/files/prayer-guide.txt', 'DOC', '3 KB'],
    ['Dargah Brochure', 'Introductory brochure (to be added)', '#', 'PDF', '—'],
    ['Phone Wallpapers', 'Devotional wallpaper pack (to be added)', '#', 'ZIP', '—'],
    ['Daily Timings Sheet', 'Darshan &amp; prayer timings (to be added)', '#', 'PDF', '—'],
];
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Downloads</p>
        <h1>Downloads</h1>
        <p>Calendars, guides, brochures and wallpapers for the devotees of Nagore</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Resources</span>
            <h2>Free Downloads</h2>
            <p>Grab the resources below. Items marked “to be added” are placeholders for official files.</p>
        </div>
        <div class="dl-grid reveal">
            <?php foreach ($downloads as $d): ?>
                <div class="dl">
                    <span class="dl__file"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm0 2 4 4h-4V4zM8 13h8v1.5H8V13zm0 3h8v1.5H8V16zm0-6h4v1.5H8V10z"/></svg></span>
                    <div class="dl__meta">
                        <strong><?= $d[0] ?></strong>
                        <small><?= $d[1] ?> &middot; <?= e($d[3]) ?> &middot; <?= e($d[4]) ?></small>
                    </div>
                    <?php if ($d[2] !== '#'): ?>
                        <a class="btn btn--outline dl__btn" href="<?= e($d[2]) ?>" download>Download</a>
                    <?php else: ?>
                        <span class="btn btn--outline dl__btn" style="opacity:.55;cursor:not-allowed">Soon</span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center form-note mt-3" style="max-width:680px;margin-left:auto;margin-right:auto">
            Administrators: drop official PDFs, images or ZIPs into <code>downloads/files/</code> and update the list in <code>downloads.php</code>.
        </p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
