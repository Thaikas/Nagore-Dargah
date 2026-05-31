<?php
$page_title = 'Gallery & Dargah Tour';
$page_desc  = 'A visual tour of Nagore Dargah Shariff — the five minarets, sacred chain, double coconut, holy mirror, kitchen, and the Peer Mandapam.';
require __DIR__ . '/includes/header.php';

// Gallery tiles with Tamil translations and descriptions
$tiles = [
    ['g1', 'tall', '5 Minarats History', '5 மினாராக்கள் வரலாறு', 'The five historic minarets of Nagore Dargah.'],
    ['g2', '',     'Chain',               'சங்கிலி',               'The historic iron chain of penance.'],
    ['g3', '',     'Kombu Thaengai',      'கொம்பு தேங்காய்',        'The rare double coconut shell relic.'],
    ['g4', 'tall', 'Mirror Nahoor shareef', 'புனித கண்ணாடி',        'The miracle mirror that saved a sinking ship.'],
    ['g5', '',     'Mudhubak shareef',    'முதுபக் ஷரீஃப்',        'The holy kitchen preparing blessed sweet rice.'],
    ['g6', '',     'Peer Mandabam',       'பீர் மண்டபம்',          'The ceremonial pavilion of the Peer Sahib.'],
    ['g2', '',     'Ya Hussain Masjid',   'யா ஹுஸைன் மஸ்ஜித்',     'The congregation mosque within the complex.'],
];

// Rich tour step details
$tour_steps = [
    [
        'title' => '5 Minarats History',
        'title_ta' => '5 மினாராக்கள் வரலாறு',
        'desc' => 'The Dargah features five distinct minarets built by royal and noble patrons. The tallest, Periya Manara (131 ft), was built by the Maratha King Achutappa Nayak, demonstrating the deep interfaith history and royal protection of the shrine.'
    ],
    [
        'title' => 'Chain',
        'title_ta' => 'சங்கிலி',
        'desc' => 'A sacred iron chain hung inside the Dargah complex. It is historically linked to the spiritual penance of the saint, who would bind himself during intense meditation. Today, pilgrims touch the chain seeking spiritual connection and blessings.'
    ],
    [
        'title' => 'Kombu Thaengai',
        'title_ta' => 'கொம்பு தேங்காய்',
        'desc' => 'A highly revered botanical curiosity: a rare double-coconut (horned coconut) shell preserved in the shrine. Devotees honor it as a unique sign of nature\'s divinity and the spiritual aura surrounding the saint.'
    ],
    [
        'title' => 'Mirror Nahoor shareef',
        'title_ta' => 'புனித கண்ணாடி',
        'desc' => 'A sacred mirror associated with the saint\'s famous sea miracle. Legend tells that a ship was sinking due to a leak; the saint threw his mirror into the ocean, which miraculously covered the breach and saved the merchant\'s cargo and crew.'
    ],
    [
        'title' => 'Mudhubak shareef',
        'title_ta' => 'முதுபக் ஷரீஃப்',
        'desc' => 'The traditional holy kitchen of the Dargah where sweet rice (Tabarruk) is cooked in giant copper vessels. It symbolizes the dargah\'s open-door hospitality, serving warm meals to every pilgrim regardless of background.'
    ],
    [
        'title' => 'Peer Mandabam',
        'title_ta' => 'பீர் மண்டபம்',
        'desc' => 'The ceremonial pavilion where the Peer Sahib (the spiritual leader and hereditary descendant) sits in silent contemplation during the annual Kanduri Uroos festival, blessing the thousands of devotees who gather.'
    ],
    [
        'title' => 'Ya Hussain Masjid',
        'title_ta' => 'யா ஹுஸைன் மஸ்ஜித்',
        'desc' => 'The historic congregation mosque located within the Dargah grounds. Dedicated to the memory of Hazrat Imam Hussain (R.A.), it provides a quiet sanctuary for daily prayers and spiritual discourse.'
    ]
];
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Gallery &amp; Tour</p>
        <h1>Gallery &amp; Dargah Tour</h1>
        <p>A visual journey through the sacred relics, historic architecture, and holy sites of Nagore Dargah</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Photo Gallery</span>
            <h2>Glimpses of Nagore Dargah</h2>
            <p>A collection of key landmarks and sacred items revered at Nagore Dargah Shariff.</p>
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
                    <figcaption>
                        <strong><?= e($t[2]) ?></strong>
                        <span style="display:block;font-size:0.75rem;color:var(--gold-400);margin-top:2px;"><?= e($t[3]) ?></span>
                        <small style="opacity:.85;font-weight:300;font-size:0.78rem;display:block;margin-top:4px;"><?= e($t[4]) ?></small>
                    </figcaption>
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
            <p>Explore the spiritual landmarks and profound heritage of the Dargah complex.</p>
        </div>
        <div class="tour reveal" style="max-width:860px;margin:0 auto">
            <?php foreach ($tour_steps as $step): ?>
                <div class="tour__step">
                    <div>
                        <h4><?= e($step['title']) ?> <span style="font-weight:400; font-size:1.1rem; color:var(--gold-600); margin-left:0.5rem;">— <?= e($step['title_ta']) ?></span></h4>
                        <p><?= e($step['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
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
