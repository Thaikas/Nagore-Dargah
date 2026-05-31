<?php
$page_title = 'Home';
$page_desc  = 'Official portal of Nagore Dargah Shariff — the 500-year-old Sufi shrine of Hazrat Syed Shahul Hameed Qadir Wali (Nagore Andavar) at Nagore, Tamil Nadu. Live darshan, Uroos, history, gallery & online Hadhya.';
require __DIR__ . '/includes/header.php';
?>

<!-- ===================== HERO ===================== -->
<section class="hero">
    <span class="hero__pattern"></span>
    <div class="container hero__inner">
        <div class="hero__content">
            <span class="eyebrow eyebrow--solo">Est. 16th Century &middot; Nagore, Tamil Nadu</span>
            <p class="hero__ar" lang="ar" dir="rtl">حَضْرَت سَيِّد شَاهُول حَمِيد قَادِر وَلِي</p>
            <h1>Nagore Dargah<span class="accent">Shariff</span></h1>
            <p class="hero__lead">The sacred shrine of Hazrat Syed Shahul Hameed Qadir Wali (Q.S.) — a 500-year beacon of peace, healing and harmony for devotees of every faith.</p>
            <div class="hero__actions">
                <a href="live-tv.php" target="_blank" rel="noopener" class="btn btn--gold btn--lg">
                    <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                    Watch Live Darshan
                </a>
                <a href="hadhya.php" class="btn btn--ghost btn--lg">Hadhya &amp; Niyyat</a>
            </div>
            <div class="hero__stats">
                <div class="hero__stat"><span class="num">500+</span><span class="lbl">Years of Grace</span></div>
                <div class="hero__stat"><span class="num">5</span><span class="lbl">Sacred Minarets</span></div>
                <div class="hero__stat"><span class="num">14</span><span class="lbl">Days of Uroos</span></div>
            </div>
        </div>

        <div class="hero__art">
            <div class="hero__arch">
                <svg class="hero__moon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M15 2a10 10 0 1 0 7 17 8 8 0 0 1-7-15 10 10 0 0 0 0-2z"/></svg>
                <!-- Dargah elevation: dome + five minarets -->
                <svg viewBox="0 0 300 360" aria-hidden="true">
                    <g fill="none" stroke="#d9bd72" stroke-width="2">
                        <!-- ground -->
                        <line x1="20" y1="340" x2="280" y2="340"/>
                        <!-- outer minarets -->
                        <rect x="30" y="170" width="16" height="170" rx="3" fill="rgba(217,189,114,.15)"/>
                        <circle cx="38" cy="162" r="9" fill="rgba(217,189,114,.25)"/>
                        <rect x="254" y="170" width="16" height="170" rx="3" fill="rgba(217,189,114,.15)"/>
                        <circle cx="262" cy="162" r="9" fill="rgba(217,189,114,.25)"/>
                        <!-- inner minarets -->
                        <rect x="78" y="120" width="18" height="220" rx="3" fill="rgba(217,189,114,.2)"/>
                        <circle cx="87" cy="110" r="11" fill="rgba(217,189,114,.3)"/>
                        <rect x="204" y="120" width="18" height="220" rx="3" fill="rgba(217,189,114,.2)"/>
                        <circle cx="213" cy="110" r="11" fill="rgba(217,189,114,.3)"/>
                        <!-- main hall -->
                        <path d="M110 340 V200 a40 40 0 0 1 80 0 V340 Z" fill="rgba(217,189,114,.12)"/>
                        <!-- arched doorway -->
                        <path d="M138 340 V250 a12 12 0 0 1 24 0 V340" fill="rgba(7,48,31,.5)"/>
                        <!-- central dome -->
                        <path d="M150 96 c-16 18 -22 34 -22 50 0 1 -10 12 -10 30 h64 c0 -18 -10 -29 -10 -30 0 -16 -6 -32 -22 -50 z" fill="rgba(217,189,114,.3)"/>
                        <!-- finial -->
                        <line x1="150" y1="96" x2="150" y2="70"/>
                        <circle cx="150" cy="64" r="6" fill="rgba(217,189,114,.4)"/>
                        <path d="M150 58 a8 8 0 1 0 5 14 6 6 0 0 1 -5 -14z" fill="#d9bd72" stroke="none"/>
                    </g>
                </svg>
                <span class="hero__caption">Periya Manara &middot; 131 ft</span>
            </div>
        </div>
    </div>
</section>
<div class="scallop"></div>

<!-- ===================== INTRO / WELCOME ===================== -->
<section class="section">
    <div class="container">
        <div class="split">
            <div class="split__content reveal">
                <span class="eyebrow">As-salāmu ʿalaykum &middot; Welcome</span>
                <h2>A Shrine Where All Faiths Meet in Peace</h2>
                <p>For over five centuries, the Dargah of <strong>Hazrat Syed Shahul Hameed Qadir Wali (Q.S.)</strong> — lovingly called <em>Nagore Andavar</em> — has drawn pilgrims to the Coromandel coast of Tamil Nadu. A 13th-generation descendant of Hazrat Muhiyudin Abdul Qadir al-Jilani (R.A.), the saint is revered as a healer and a friend of God.</p>
                <p>Built on land gifted by the Hindu king Achutappa Nayak of Thanjavur, whom the saint is believed to have cured, the Dargah stands today as one of South India's most cherished symbols of communal harmony — its lamps lit by Muslims and Hindus alike.</p>
                <blockquote class="lead-q">&ldquo;The friends of God know neither fear, nor grief.&rdquo;</blockquote>
                <a href="history.php" class="btn btn--primary">Read the Full History</a>
            </div>
            <div class="split__media reveal">
                <svg class="frame-art" viewBox="0 0 300 300" aria-hidden="true">
                    <circle cx="150" cy="150" r="120" fill="none" stroke="#d9bd72" stroke-width="2" opacity=".6"/>
                    <circle cx="150" cy="150" r="100" fill="none" stroke="#d9bd72" stroke-width="1" opacity=".4"/>
                    <g fill="#f3e9cf">
                        <path d="M150 70c-12 14-17 26-17 38 0 1-8 9-8 23h50c0-14-8-22-8-23 0-12-5-24-17-38z"/>
                        <path d="M120 230V160a30 30 0 0 1 60 0v70z"/>
                        <rect x="143" y="180" width="14" height="50" rx="7" fill="#0a4d3c"/>
                        <rect x="92" y="120" width="11" height="110" rx="3"/><circle cx="97.5" cy="113" r="7"/>
                        <rect x="197" y="120" width="11" height="110" rx="3"/><circle cx="202.5" cy="113" r="7"/>
                    </g>
                    <text x="150" y="270" text-anchor="middle" fill="#d9bd72" font-family="Amiri, serif" font-size="15" letter-spacing="2">NAGORE&nbsp;ANDAVAR</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK SERVICES ===================== -->
<section class="section section--tint">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Ziyarat &amp; Services</span>
            <h2>Everything for Your Pilgrimage</h2>
            <p>From live darshan of the holy shrine to online Hadhya &amp; Niyyat — serving devotees near and far.</p>
        </div>
        <div class="grid grid--4">
            <a href="live-tv.php" target="_blank" rel="noopener" class="card service-tile reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z"/></svg></span>
                <h3>Live TV</h3>
                <p>Watch the live feed of the Dargah shrine, opening in its own window.</p>
            </a>
            <a href="uroos.php" class="card service-tile reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2zM6 20h12v2H6z"/></svg></span>
                <h3>Uroos &amp; Events</h3>
                <p>The 14-day Kanduri festival, flag hoisting and Santhanakoodu.</p>
            </a>
            <a href="hadhya.php" class="card service-tile reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M12 21s-7-4.5-9.3-9.1C1.2 8.7 2.8 5.5 6 5.5c1.9 0 3.2 1 4 2.1.8-1.1 2.1-2.1 4-2.1 3.2 0 4.8 3.2 3.3 6.4C19 16.5 12 21 12 21z"/></svg></span>
                <h3>Hadhya &amp; Niyyat</h3>
                <p>Offer your vows online with secure UPI / QR payment.</p>
            </a>
            <a href="gallery.php" class="card service-tile reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M21 5H3a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zM8 8.5A1.5 1.5 0 1 1 6.5 10 1.5 1.5 0 0 1 8 8.5zM5 17l4-4 2.5 3L15 11l4 6z"/></svg></span>
                <h3>Gallery &amp; Tour</h3>
                <p>A visual journey through the shrine, minarets and sacred tanks.</p>
            </a>
        </div>
    </div>
</section>

<!-- ===================== FIVE MINARETS ===================== -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Architecture</span>
            <h2>The Five Sacred Minarets</h2>
            <p>Rising over the shrine in the four cardinal points around the dome — the tallest, <em>Periya Manara</em>, was built by the Maratha king Pratap Singh in gratitude for a son.</p>
        </div>
        <div class="minarets reveal">
            <div class="minaret"><div class="minaret__tower" style="height:120px"></div><h4>Periya Manara</h4><span class="h">131 ft</span><small>Built by Pratap Singh</small></div>
            <div class="minaret"><div class="minaret__tower" style="height:88px"></div><h4>Thalaimattu</h4><span class="h">93.5 ft</span><small>Minara</small></div>
            <div class="minaret"><div class="minaret__tower" style="height:87px"></div><h4>Muthubaq</h4><span class="h">93.25 ft</span><small>Minara</small></div>
            <div class="minaret"><div class="minaret__tower" style="height:74px"></div><h4>Ottu Minara</h4><span class="h">80 ft</span><small>Minara</small></div>
            <div class="minaret"><div class="minaret__tower" style="height:70px"></div><h4>Sahib Minara</h4><span class="h">77 ft</span><small>Minara</small></div>
        </div>
    </div>
</section>

<!-- ===================== FACTS BAND ===================== -->
<section class="section section--green">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">At a Glance</span>
            <h2>Nagore Dargah in Numbers</h2>
        </div>
        <div class="facts reveal">
            <div class="fact"><div class="num">1490</div><div class="lbl">Birth of the Saint (CE)</div></div>
            <div class="fact"><div class="num">200</div><div class="lbl">Acres Gifted by the King</div></div>
            <div class="fact"><div class="num">5</div><div class="lbl">Minarets (Manaras)</div></div>
            <div class="fact"><div class="num">14</div><div class="lbl">Days of Kanduri Uroos</div></div>
        </div>
    </div>
</section>

<!-- ===================== UROOS TEASER ===================== -->
<section class="section section--tint">
    <div class="container">
        <div class="split split--reverse">
            <div class="split__media reveal">
                <svg class="frame-art" viewBox="0 0 300 300" aria-hidden="true">
                    <g fill="none" stroke="#f3e9cf" stroke-width="2">
                        <path d="M150 40 L150 120" /><path d="M150 50 q40 6 40 22 q-20 8 -40 6" fill="#d9bd72" stroke="none"/>
                        <circle cx="150" cy="40" r="6" fill="#f3e9cf" stroke="none"/>
                    </g>
                    <g fill="#f3e9cf">
                        <path d="M90 230 q0-60 60-60 t60 60z" opacity=".25"/>
                        <circle cx="120" cy="200" r="5"/><circle cx="150" cy="190" r="5"/><circle cx="180" cy="200" r="5"/>
                        <circle cx="135" cy="215" r="4"/><circle cx="165" cy="215" r="4"/>
                    </g>
                    <text x="150" y="270" text-anchor="middle" fill="#d9bd72" font-family="Amiri, serif" font-size="16" letter-spacing="2">KANDURI &middot; UROOS</text>
                </svg>
            </div>
            <div class="split__content reveal">
                <span class="eyebrow">The Grand Festival</span>
                <h2>The Kanduri Uroos Mubarak</h2>
                <p>Each year, the death anniversary (Urs) of the saint is commemorated over <strong>fourteen radiant days</strong>. The festival opens with the ceremonial flag hoisting (<em>Kodiyetram</em>) and culminates in the <em>Santhanakoodu</em> — the procession of sandalwood paste carried in decorated caskets through streets thronged with lakhs of devotees.</p>
                <ul class="prose" style="margin-left:1.2rem">
                    <li>Flag Hoisting &mdash; <em>Kodiyetram</em></li>
                    <li>Daily Qiraat, Qawwali &amp; Zikr assemblies</li>
                    <li>Sandal anointment &amp; <em>Santhanakoodu</em> procession</li>
                    <li>Fathiha, Niyyat fulfilment &amp; community feasts</li>
                </ul>
                <a href="uroos.php" class="btn btn--primary">Explore Uroos &amp; Events</a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA BAND ===================== -->
<section class="cta-band">
    <span class="hero__pattern"></span>
    <div class="container reveal">
        <span class="eyebrow eyebrow--solo" style="justify-content:center">Offer Your Niyyat</span>
        <h2>Send Your Hadhya from Anywhere</h2>
        <p>Cannot visit in person? Fulfil your vows and contribute to the upkeep of the shrine securely through UPI &amp; QR.</p>
        <div class="hero__actions">
            <a href="hadhya.php" class="btn btn--gold btn--lg">Donate via QR / UPI</a>
            <a href="contact.php" class="btn btn--ghost btn--lg">Plan Your Visit</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
