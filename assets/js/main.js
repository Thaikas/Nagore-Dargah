/* Nagore Dargah Shariff — interactions */
(function () {
    'use strict';

    /* ---- Mobile navigation ---- */
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('primaryNav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            document.body.classList.toggle('nav-open', open);
        });
        nav.querySelectorAll('a').forEach(function (a) {
            a.addEventListener('click', function () {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('nav-open');
            });
        });
    }

    /* ---- Back to top ---- */
    var toTop = document.getElementById('toTop');
    if (toTop) {
        window.addEventListener('scroll', function () {
            toTop.classList.toggle('show', window.scrollY > 500);
        }, { passive: true });
        toTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ---- Reveal on scroll ---- */
    var reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && reveals.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
            });
        }, { threshold: 0.12 });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('in'); });
    }

    /* ---- Copy-to-clipboard (UPI id etc.) ---- */
    document.querySelectorAll('[data-copy]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var text = btn.getAttribute('data-copy');
            var done = function () {
                var old = btn.textContent;
                btn.textContent = 'Copied!';
                setTimeout(function () { btn.textContent = old; }, 1600);
            };
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(done, done);
            } else {
                var t = document.createElement('textarea');
                t.value = text; document.body.appendChild(t); t.select();
                try { document.execCommand('copy'); } catch (e) {}
                document.body.removeChild(t); done();
            }
        });
    });

    /* ---- Donation amount chips → build UPI link ---- */
    var chips = document.querySelectorAll('.amount-chips button');
    var customAmt = document.getElementById('customAmount');
    var payLink = document.getElementById('payLink');
    var upi = payLink ? payLink.getAttribute('data-upi') : null;

    function buildUpi(amount) {
        if (!payLink || !upi) return;
        var pa = payLink.getAttribute('data-pa');
        var pn = encodeURIComponent(payLink.getAttribute('data-pn') || '');
        var tn = encodeURIComponent(payLink.getAttribute('data-tn') || '');
        var url = 'upi://pay?pa=' + encodeURIComponent(pa) + '&pn=' + pn + '&cu=INR&tn=' + tn;
        if (amount && Number(amount) > 0) url += '&am=' + encodeURIComponent(amount);
        payLink.setAttribute('href', url);
    }

    chips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            chips.forEach(function (c) { c.classList.remove('active'); });
            chip.classList.add('active');
            if (customAmt) customAmt.value = chip.getAttribute('data-amount');
            buildUpi(chip.getAttribute('data-amount'));
        });
    });
    if (customAmt) {
        customAmt.addEventListener('input', function () {
            chips.forEach(function (c) { c.classList.remove('active'); });
            buildUpi(customAmt.value);
        });
    }
    buildUpi(customAmt ? customAmt.value : null);

    /* ---- Footer year handled in PHP; nothing else needed ---- */
})();
