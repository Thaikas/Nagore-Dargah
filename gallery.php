<?php
$page_title = 'Gallery & Dargah Tour';
$page_desc  = 'A visual tour of Nagore Dargah Shariff — the five minarets, sacred chain, double coconut, holy mirror, kitchen, and the Peer Mandapam.';
require __DIR__ . '/includes/header.php';

// Gallery tiles with Tamil translations, descriptions and YouTube video IDs
$tiles = [
    ['g1', '', '5 Minarats History', '5 மினாராக்கள் வரலாறு', 'The five historic minarets of Nagore Dargah.', '0qA5lUjozRo'],
    ['g2', '', 'Chain',               'சங்கிலி',               'The historic iron chain of penance.', 'ofprwfr50-0'],
    ['g3', '', 'Kombu Thaengai',      'கொம்பு தேங்காய்',        'The rare double coconut shell relic.', '8ttKbS0_HJs'],
    ['g4', '', 'Mirror Nahoor shareef', 'புனித கண்ணாடி',        'The miracle mirror that saved a sinking ship.', 'U-i5hDzyQyQ'],
    ['g5', '', 'Mudhubak shareef',    'முதுபக் ஷரீஃப்',        'The holy kitchen preparing blessed sweet rice.', 'NggrToXZTGM'],
    ['g6', '', 'Peer Mandabam',       'பீர் மண்டபம்',          'The ceremonial pavilion of the Peer Sahib.', 'tIXEJYt4oGg'],
    ['g2', '', 'Ya Hussain Masjid',   'யா ஹுஸைன் மஸ்ஜித்',     'The congregation mosque within the complex.', 'KKM0VFN2wE4'],
];

// Rich tour step details with YouTube video IDs
$tour_steps = [
    [
        'title' => '5 Minarats History',
        'title_ta' => '5 மினாராக்கள் வரலாறு',
        'desc' => 'The Dargah features five distinct minarets built by royal and noble patrons. The tallest, Periya Manara (131 ft), was built by the Maratha King Achutappa Nayak, demonstrating the deep interfaith history and royal protection of the shrine.',
        'id' => '0qA5lUjozRo'
    ],
    [
        'title' => 'Chain',
        'title_ta' => 'சங்கிலி',
        'desc' => 'A sacred iron chain hung inside the Dargah complex. It is historically linked to the spiritual penance of the saint, who would bind himself during intense meditation. Today, pilgrims touch the chain seeking spiritual connection and blessings.',
        'id' => 'ofprwfr50-0'
    ],
    [
        'title' => 'Kombu Thaengai',
        'title_ta' => 'கொம்பு தேங்காய்',
        'desc' => 'A highly revered botanical curiosity: a rare double-coconut (horned coconut) shell preserved in the shrine. Devotees honor it as a unique sign of nature\'s divinity and the spiritual aura surrounding the saint.',
        'id' => '8ttKbS0_HJs'
    ],
    [
        'title' => 'Mirror Nahoor shareef',
        'title_ta' => 'புனித கண்ணாடி',
        'desc' => 'A sacred mirror associated with the saint\'s famous sea miracle. Legend tells that a ship was sinking due to a leak; the saint threw his mirror into the ocean, which miraculously covered the breach and saved the merchant\'s cargo and crew.',
        'id' => 'U-i5hDzyQyQ'
    ],
    [
        'title' => 'Mudhubak shareef',
        'title_ta' => 'முதுபக் ஷரீஃப்',
        'desc' => 'The traditional holy kitchen of the Dargah where sweet rice (Tabarruk) is cooked in giant copper vessels. It symbolizes the dargah\'s open-door hospitality, serving warm meals to every pilgrim regardless of background.',
        'id' => 'NggrToXZTGM'
    ],
    [
        'title' => 'Peer Mandabam',
        'title_ta' => 'பீர் மண்டபம்',
        'desc' => 'The ceremonial pavilion where the Peer Sahib (the spiritual leader and hereditary descendant) sits in silent contemplation during the annual Kanduri Uroos festival, blessing the thousands of devotees who gather.',
        'id' => 'tIXEJYt4oGg'
    ],
    [
        'title' => 'Ya Hussain Masjid',
        'title_ta' => 'யா ஹுஸைன் மஸ்ஜித்',
        'desc' => 'The historic congregation mosque located within the Dargah grounds. Dedicated to the memory of Hazrat Imam Hussain (R.A.), it provides a quiet sanctuary for daily prayers and spiritual discourse.',
        'id' => 'KKM0VFN2wE4'
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
                <a class="gallery__item <?= e($t[0]) ?> <?= e($t[1]) ?>" href="https://youtu.be/<?= e($t[5]) ?>" target="_blank" rel="noopener" style="background-image: url('https://img.youtube.com/vi/<?= e($t[5]) ?>/hqdefault.jpg'); background-size: cover; background-position: center;">
                    <figcaption>
                        <strong><?= e($t[2]) ?></strong>
                        <span style="display:block;font-size:0.75rem;color:var(--gold-400);margin-top:2px;"><?= e($t[3]) ?></span>
                        <small style="opacity:.85;font-weight:300;font-size:0.78rem;display:block;margin-top:4px;"><?= e($t[4]) ?></small>
                    </figcaption>
                </a>
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
                        <a href="https://youtu.be/<?= e($step['id']) ?>" target="_blank" rel="noopener" class="card__link" style="margin-top:0.4rem;">
                            <svg class="ico" viewBox="0 0 24 24" aria-hidden="true" style="fill:currentColor;vertical-align:-0.15em;"><path d="M8 5v14l11-7z"/></svg> Watch Documentary Video &rarr;
                        </a>
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
