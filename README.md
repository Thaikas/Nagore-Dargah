# Nagore Dargah Shariff — Website

Official information portal for **Nagore Dargah Shariff**, the 500-year-old Sufi
shrine of **Hazrat Syed Shahul Hameed Qadir Wali (Q.S.)** — *Nagore Andavar* — at
Nagore, Nagapattinam District, Tamil Nadu, India.

Built with plain **PHP** (shared header/footer includes) + a hand-crafted
responsive CSS design system. No build step, no framework, no database — just
drop it on any PHP host.

## Pages

| Page | File | Notes |
|------|------|-------|
| Home | `index.php` | Hero, welcome, services, five minarets, Uroos teaser |
| Live TV | `live-tv.php` | Live shrine darshan — **opens in a new window** |
| Uroos & Events | `uroos.php` | Kanduri Uroos, 14-day timeline, yearly observances |
| Gallery & Tour | `gallery.php` | Photo grid + guided Dargah tour |
| History & Sayings | `history.php` | Full history + sayings of the saint |
| Management | `management.php` | Kalifa, Managing Trustee, governance |
| Contact | `contact.php` | Address, phone, **Google Map**, working contact form |
| Hadhya & Niyyat | `hadhya.php` | Online donation with **UPI / QR** payment |
| Vlogs & Links | `vlogs.php` | Video cards + official channel links |
| Downloads | `downloads.php` | Calendars, guides, brochures |

## Structure

```
.
├── index.php, live-tv.php, …        # pages
├── includes/
│   ├── config.php                   # ALL editable site data (single source of truth)
│   ├── header.php                   # nav bar + <head>
│   └── footer.php                   # global footer
├── assets/
│   ├── css/style.css                # design system (emerald / gold / ivory)
│   ├── js/main.js                   # nav, scroll reveal, copy, UPI link builder
│   └── img/favicon.svg
└── downloads/files/                 # downloadable resources
```

## Run locally

```bash
php -S localhost:8000
# open http://localhost:8000
```

Any PHP 7.4+ / 8.x host (Apache, Nginx + PHP-FPM, shared cPanel hosting) works.

## Before going live — edit `includes/config.php`

The site ships with sensible, publicly-sourced defaults. Replace the items
marked `// TODO` with the official details:

- **`$LIVE['url']` / `$LIVE['embed']`** — the official live-stream URL / YouTube embed.
- **`$PAY['upi_id']`** — the official UPI / VPA for Hadhya & Niyyat.
  (Or place an official static QR image at `assets/img/upi-qr.png`.)
- **`$CONTACT['email']`** — official email address.
- **`$SOCIAL`** — official YouTube / Facebook / Instagram / WhatsApp links.

Other content to refine with official material:
- Real photographs in `gallery.php` (placeholders are tagged with captions).
- Authenticated sayings in `history.php` and office-bearers in `management.php`.
- Official PDFs/wallpapers in `downloads/files/` (+ update `downloads.php`).

## Features

- Fully **responsive** (mobile hamburger nav, fluid type, adaptive grids).
- **Global** reusable header + footer via PHP includes.
- Indo-Islamic visual identity (dome + five minarets motif, geometric patterns).
- Accessible: semantic landmarks, ARIA labels, keyboard-friendly nav.
- Contact form with server-side validation (uses `mail()` if configured).
- UPI deep-link + dynamically generated QR for donations.
- Live TV launches in a dedicated window.

## Notes on accuracy

Historical content (the saint's life, the five minarets and their heights, the
Achutappa Nayak legend, the Kanduri Uroos) is drawn from public encyclopaedic
sources and presented respectfully. The Dargah administration should review and
authenticate all content before publication.
