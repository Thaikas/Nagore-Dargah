<?php
$page_title = 'Gallery & Dargah Tour';
$page_desc  = 'A visual tour of Nagore Dargah Shariff — the dome, the five minarets, sacred tanks, the flagstaff and the Uroos festival.';
require __DIR__ . '/includes/header.php';

// Gallery tiles — captions describe what each real photo should depict.
$tiles = [
    ['g1','tall','The Sacred Shrine','The holy tomb (Roza) of Nagore Andavar'],
    ['g2','','Periya Manara','The 131 ft tallest minaret'],
    ['g3','','The Central Dome','Golden dome over the shrine'],
    ['g4','','Sacred Tanks','Pilgrim ponds within the complex'],
    ['g5','tall','The Flagstaff','Kodimaram where the Uroos flag is hoisted'],
    ['g6','','Santhanakoodu','Sandal procession during Uroos'],
    ['g2','','Night Illumination','The Dargah lit during the festival'],
    ['g1','','The Main Gateway','Entrance to the Dargah complex'],
    ['g4','','Devotees at Prayer','Pilgrims of every faith'],
];
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Gallery &amp; Tour</p>
        <h1>Gallery &amp; Dargah Tour</h1>
        <p>A visual journey through the shrine, its minarets, tanks and the radiance of the Uroos</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Photo Gallery</span>
            <h2>Glimpses of Nagore Dargah</h2>
            <p>The placeholders below are ready to be replaced with official photographs of the Dargah.</p>
        </div>
        <div class="gallery reveal">
            <?php foreach ($tiles as $t): ?>
                <figure class="gallery__item <?= e($t[0]) ?> <?= e($t[1]) ?>">
                    <svg class="ph-art" viewBox="0 0 120 120" aria-hidden="true">
                        <g fill="rgba(255,255,255,.85)">
                            <path d="M60 26c-7 8-10 15-10 22 0 1-5 6-5 14h30c0-8-5-13-5-14 0-7-3-14-10-22z"/>
                            <path d="M42 90V62a18 18 0 0 1 36 0v28z"/>
                            <rect x="55" y="72" width="10" height="18" rx="5" fill="rgba(7,48,31,.4)"/>
                            <rect x="28" y="50" width="7" height="40" rx="2"/><circle cx="31.5" cy="46" r="4"/>
                            <rect x="85" y="50" width="7" height="40" rx="2"/><circle cx="88.5" cy="46" r="4"/>
                        </g>
                    </svg>
                    <figcaption><strong><?= e($t[2]) ?></strong><br><small style="opacity:.85;font-weight:300"><?= e($t[3]) ?></small></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Guided Walk</span>
            <h2>The Dargah Tour</h2>
            <p>Follow the path a pilgrim takes through the sacred complex of Nagore.</p>
        </div>
        <div class="tour reveal" style="max-width:860px;margin:0 auto">
            <div class="tour__step"><div><h4>The Main Gateway</h4><p>Enter through the grand archway and step into a complex shaped by five centuries of devotion.</p></div></div>
            <div class="tour__step"><div><h4>The Sacred Tanks</h4><p>Pause at the holy ponds where pilgrims gather before approaching the shrine.</p></div></div>
            <div class="tour__step"><div><h4>The Roza (Holy Tomb)</h4><p>Reach the heart of the Dargah — the resting place of Hazrat Shahul Hameed Qadir Wali (Q.S.) beneath the central dome.</p></div></div>
            <div class="tour__step"><div><h4>The Five Minarets</h4><p>Stand beneath the towering Periya Manara and the four manaras that crown the four cardinal points.</p></div></div>
            <div class="tour__step"><div><h4>The Flagstaff (Kodimaram)</h4><p>Behold the great mast where the Uroos flag is hoisted to open the annual Kanduri festival.</p></div></div>
        </div>
        <div class="text-center mt-3 reveal">
            <a href="live-tv.php" target="_blank" rel="noopener" class="btn btn--primary btn--lg">
                <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                Take the Live Virtual Darshan
            </a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
