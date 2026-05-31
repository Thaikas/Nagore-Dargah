<?php
$page_title = 'Contact';
$page_desc  = 'Contact Nagore Dargah Shariff — address, phone, email and location map at Nagore, Nagapattinam District, Tamil Nadu 611002.';
require __DIR__ . '/includes/config.php';

// ---- Simple, safe contact form handler -----------------------------------
$form_sent = false;
$form_error = '';
$old = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $k => $_) {
        $old[$k] = trim($_POST[$k] ?? '');
    }
    if ($old['name'] === '' || $old['message'] === '') {
        $form_error = 'Please share at least your name and a message.';
    } elseif ($old['email'] !== '' && !filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } else {
        // Attempt delivery if mail() is configured; otherwise acknowledge gracefully.
        $to      = $CONTACT['email'];
        $subject = 'Website enquiry: ' . ($old['subject'] !== '' ? $old['subject'] : 'General');
        $body    = "Name: {$old['name']}\nEmail: {$old['email']}\n\n{$old['message']}\n";
        $headers = 'From: noreply@nagoredargahshariff.org' . "\r\n" .
                   'Reply-To: ' . ($old['email'] !== '' ? $old['email'] : $to);
        if (function_exists('mail')) {
            @mail($to, $subject, $body, $headers);
        }
        $form_sent = true;
        $old = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Contact</p>
        <h1>Contact &amp; Location</h1>
        <p>Reach the Dargah office, find us on the map and plan your ziyarat</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="reveal">
                <span class="eyebrow">Get in Touch</span>
                <h2 style="margin-bottom:1.4rem">We're Here to Help</h2>
                <ul class="info-list">
                    <li>
                        <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg></span>
                        <div><strong>Address</strong>
                            <span><?= e(implode(', ', $CONTACT['address_lines'])) ?></span>
                        </div>
                    </li>
                    <li>
                        <span class="ic"><svg viewBox="0 0 24 24"><path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.3 1l-2.2 2.2z"/></svg></span>
                        <div><strong>Phone</strong><a href="tel:<?= e($CONTACT['phone_raw']) ?>"><?= e($CONTACT['phone']) ?></a></div>
                    </li>
                    <li>
                        <span class="ic"><svg viewBox="0 0 24 24"><path d="M4 4h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm8 7L5 6.5V7l7 4.5L19 7v-.5L12 11z"/></svg></span>
                        <div><strong>Email</strong><a href="mailto:<?= e($CONTACT['email']) ?>"><?= e($CONTACT['email']) ?></a></div>
                    </li>
                    <li>
                        <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 1a11 11 0 1 0 0 22 11 11 0 0 0 0-22zm1 11h5v2h-7V6h2v6z"/></svg></span>
                        <div><strong>Darshan Timings</strong><span>Open daily, early morning to late night. Timings may vary during Uroos.</span></div>
                    </li>
                </ul>
                <a href="https://www.google.com/maps/search/?api=1&query=<?= e($CONTACT['maps_q']) ?>" target="_blank" rel="noopener" class="btn btn--outline mt-2">Open in Google Maps &nearr;</a>
            </div>

            <div class="reveal">
                <div class="card" style="padding:1.8rem">
                    <h3 style="margin-bottom:1rem">Send a Message</h3>
                    <?php if ($form_sent): ?>
                        <div class="alert alert--ok">Jazak Allah Khair! Your message has been received. The Dargah office will respond, <em>Insha'Allah</em>.</div>
                    <?php elseif ($form_error): ?>
                        <div class="alert" style="background:#fbeaea;border:1px solid #e6b9b9;color:#9a2b2b"><?= e($form_error) ?></div>
                    <?php endif; ?>
                    <form method="post" action="contact.php#form" id="form" novalidate>
                        <div class="form-field">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" value="<?= e($old['name']) ?>" required>
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?= e($old['email']) ?>">
                        </div>
                        <div class="form-field">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" value="<?= e($old['subject']) ?>">
                        </div>
                        <div class="form-field">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required><?= e($old['message']) ?></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary btn--lg" style="width:100%;justify-content:center">Send Message</button>
                        <p class="form-note mt-2">For urgent matters during Uroos, please call the office directly.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--tint" style="padding-bottom:0">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Find Us</span>
            <h2>Location Map</h2>
            <p>Nagore Dargah Shariff, Nagore — Nagapattinam District, Tamil Nadu 611002.</p>
        </div>
    </div>
    <div class="map-embed reveal" style="border-radius:0">
        <iframe
            title="Map to Nagore Dargah Shariff"
            src="https://www.google.com/maps?q=<?= e($CONTACT['maps_q']) ?>&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
