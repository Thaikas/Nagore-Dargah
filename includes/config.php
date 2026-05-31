<?php
/**
 * Nagore Dargah Shariff — Global site configuration
 * Central place for site-wide data: identity, contact, navigation and
 * editable settings (live stream URL, UPI/QR payment details, social links).
 *
 * NOTE: Values marked  // TODO  should be replaced with the real, official
 * details supplied by the Dargah administration before going live.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ---------------------------------------------------------------------------
// Site identity
// ---------------------------------------------------------------------------
$SITE = [
    'name'        => 'Nagore Dargah Shariff',
    'name_ta'     => 'நாகூர் தர்கா ஷெரீப்',
    'tagline'     => 'The Sacred Shrine of Hazrat Syed Shahul Hameed Qadir Wali (Q.S.)',
    'short'       => 'Nagore Dargah',
    'established' => '16th Century CE',
    'description' => 'Official information portal of Nagore Dargah Shariff — the 500-year-old Sufi shrine of Hazrat Syed Shahul Hameed Qadir Wali (Nagore Andavar) at Nagore, Tamil Nadu, a timeless symbol of peace, healing and communal harmony.',
];

// ---------------------------------------------------------------------------
// Contact details  (official, from public records — verify before launch)
// ---------------------------------------------------------------------------
$CONTACT = [
    'address_lines' => [
        'Nagore Dargah Shariff',
        '33, Kalifa Sahib Street, Nagore',
        'Nagapattinam District',
        'Tamil Nadu 611002, India',
    ],
    'phone'    => '+91 4365 250 194',
    'phone_raw'=> '+914365250194',
    'email'    => 'info@nagoredargahshariff.org',   // TODO: confirm official email
    'maps_q'   => 'Nagore+Dargah+Shariff,+Nagore,+Nagapattinam,+Tamil+Nadu+611002',
    'lat'      => '10.8205',
    'lng'      => '79.8420',
];

// ---------------------------------------------------------------------------
// Live broadcast  — replace with the official live stream embed/URL
// ---------------------------------------------------------------------------
$LIVE = [
    // Direct YouTube live/channel link used for the "open in new window" page.
    'url'      => 'https://www.youtube.com/@NAGOREDARGAHKALIFA/streams', // TODO: official live URL
    // Embed URL used inside the live-tv window (leave '' to show channel link only).
    'embed'    => 'https://www.youtube.com/embed/live_stream?channel=UC_PLACEHOLDER',
    'channel'  => 'Nagore Dargah Official',
];

// ---------------------------------------------------------------------------
// Online Hadhya & Niyyat (donation) — UPI / QR payment
// ---------------------------------------------------------------------------
$PAY = [
    'upi_id'   => 'nagoredargah@upi',          // TODO: official UPI / VPA
    'payee'    => 'Nagore Dargah Shariff',
    'note'     => 'Hadhya & Niyyat',
    'currency' => 'INR',
];

// ---------------------------------------------------------------------------
// Social / external links
// ---------------------------------------------------------------------------
$SOCIAL = [
    'youtube'   => 'https://www.youtube.com/@NAGOREDARGAHKALIFA',
    'facebook'  => 'https://www.facebook.com/NagoreDargahKalifaSahib/',
    'instagram' => '#',
    'whatsapp'  => 'https://wa.me/914365250194',
];

// ---------------------------------------------------------------------------
// Primary navigation
//   'window' => true   →  link opens in a new browser window/tab
// ---------------------------------------------------------------------------
$NAV = [
    ['label' => 'Home',                 'url' => 'index.php'],
    ['label' => 'Live TV',              'url' => 'live-tv.php', 'window' => true],
    ['label' => 'Uroos & Events',       'url' => 'uroos.php'],
    ['label' => 'Gallery & Tour',       'url' => 'gallery.php'],
    ['label' => 'History & Sayings',    'url' => 'history.php'],
    ['label' => 'Management',           'url' => 'management.php'],
    ['label' => 'Vlogs & Links',        'url' => 'vlogs.php'],
    ['label' => 'Downloads',            'url' => 'downloads.php'],
    ['label' => 'Contact',              'url' => 'contact.php'],
    ['label' => 'Hadhya & Niyyat',      'url' => 'hadhya.php', 'cta' => true],
];

/**
 * Helper: mark the active nav item based on the current script name.
 */
function nd_is_active(string $url): bool
{
    $current = basename($_SERVER['PHP_SELF'] ?? 'index.php');
    return $current === $url;
}

/**
 * Helper: escape output.
 */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
