<?php require_once __DIR__ . '/config.php'; ?>

<footer class="site-footer">
    <div class="footer-pattern" aria-hidden="true"></div>
    <div class="container site-footer__grid">

        <div class="footer-col footer-col--brand">
            <div class="brand brand--footer">
                <span class="brand__mark">
                    <svg viewBox="0 0 80 80" aria-hidden="true">
                        <g fill="currentColor">
                            <rect x="6"  y="40" width="5" height="30" rx="1"/><circle cx="8.5" cy="37" r="3.5"/>
                            <rect x="69" y="40" width="5" height="30" rx="1"/><circle cx="71.5" cy="37" r="3.5"/>
                            <rect x="22" y="30" width="5" height="40" rx="1"/><circle cx="24.5" cy="26" r="3.8"/>
                            <rect x="53" y="30" width="5" height="40" rx="1"/><circle cx="55.5" cy="26" r="3.8"/>
                            <path d="M40 8c-2.4 3-3.6 6-3.6 9 0 .1-3.4 2.6-3.4 8.5 0 4 2.4 6.8 2.4 6.8h9.2s2.4-2.8 2.4-6.8c0-5.9-3.4-8.4-3.4-8.5 0-3-1.2-6-3.6-9z"/>
                            <path d="M27 70V44c0-7.2 5.8-13 13-13s13 5.8 13 13v26z"/>
                            <rect x="14" y="70" width="52" height="5" rx="1"/>
                        </g>
                    </svg>
                </span>
                <span class="brand__text">
                    <span class="brand__name"><?= e($SITE['short']) ?></span>
                    <span class="brand__sub">Shariff</span>
                </span>
            </div>
            <p class="footer-about"><?= e($SITE['tagline']) ?></p>
            <div class="footer-social">
                <a href="<?= e($SOCIAL['youtube']) ?>" target="_blank" rel="noopener" aria-label="YouTube">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M23 12s0-3.3-.4-4.9a2.6 2.6 0 0 0-1.8-1.8C19.1 5 12 5 12 5s-7.1 0-8.8.3A2.6 2.6 0 0 0 1.4 7.1C1 8.7 1 12 1 12s0 3.3.4 4.9a2.6 2.6 0 0 0 1.8 1.8C4.9 19 12 19 12 19s7.1 0 8.8-.3a2.6 2.6 0 0 0 1.8-1.8C23 15.3 23 12 23 12zM9.8 15.3V8.7l5.7 3.3-5.7 3.3z"/></svg>
                </a>
                <a href="<?= e($SOCIAL['facebook']) ?>" target="_blank" rel="noopener" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H7v3h3v6h3v-6h3l1-3h-4v-2c0-.6.4-1 1-1z"/></svg>
                </a>
                <a href="<?= e($SOCIAL['whatsapp']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.5 15.2L2 22l4.9-1.5A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.9.9.9-2.8-.2-.3A8 8 0 1 1 12 20zm4.4-5.6c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.6.1l-.8 1c-.2.2-.3.2-.5.1a6.5 6.5 0 0 1-3.2-2.8c-.1-.2 0-.4.1-.5l.4-.5.2-.4v-.4l-.8-1.9c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.8.8-1 1.9-.6 3.1.5 1.5 1.5 2.9 2.9 3.9 1.9 1.4 3.3 1.6 4.1 1.4.6-.1 1.4-.6 1.6-1.2.2-.6.2-1.1.1-1.2l-.4-.3z"/></svg>
                </a>
            </div>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Explore</h4>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="history.php">History &amp; Sayings</a></li>
                <li><a href="uroos.php">Uroos &amp; Events</a></li>
                <li><a href="gallery.php">Gallery &amp; Tour</a></li>
                <li><a href="management.php">Management</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Services</h4>
            <ul class="footer-links">
                <li><a href="live-tv.php" target="_blank" rel="noopener">Live TV &nearr;</a></li>
                <li><a href="hadhya.php">Hadhya &amp; Niyyat</a></li>
                <li><a href="vlogs.php">Vlogs &amp; Links</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Reach Us</h4>
            <address class="footer-address">
                <?php foreach ($CONTACT['address_lines'] as $line): ?>
                    <span><?= e($line) ?></span>
                <?php endforeach; ?>
                <a href="tel:<?= e($CONTACT['phone_raw']) ?>"><?= e($CONTACT['phone']) ?></a>
                <a href="mailto:<?= e($CONTACT['email']) ?>"><?= e($CONTACT['email']) ?></a>
            </address>
        </div>
    </div>

    <div class="footer-bar">
        <div class="container footer-bar__inner">
            <p>&copy; <?= date('Y') ?> <?= e($SITE['name']) ?>. All rights reserved.</p>
            <p class="footer-bar__dua" lang="ar" dir="rtl">يَا شَيْخ شَاهُول حَمِيد قَادِر وَلِي</p>
            <p>Built with devotion &amp; respect for all faiths.</p>
        </div>
    </div>
</footer>

<button class="to-top" id="toTop" aria-label="Back to top">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5l7 7-1.4 1.4L13 8.8V20h-2V8.8l-4.6 4.6L5 12z"/></svg>
</button>

<script src="assets/js/main.js"></script>
</body>
</html>
