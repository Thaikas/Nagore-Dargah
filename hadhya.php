<?php
$page_title = 'Hadhya & Niyyat Online';
$page_desc  = 'Offer your Hadhya & Niyyat to Nagore Dargah Shariff online through secure UPI and QR payment. Fulfil your vows from anywhere in the world.';
require __DIR__ . '/includes/config.php';

// Build the base UPI string used for the QR code.
$upi_params = http_build_query([
    'pa' => $PAY['upi_id'],
    'pn' => $PAY['payee'],
    'cu' => $PAY['currency'],
    'tn' => $PAY['note'],
], '', '&', PHP_QUERY_RFC3986);
$upi_string = 'upi://pay?' . $upi_params;

// QR image generated from the UPI string (replace with an official static QR
// image at assets/img/upi-qr.png for production if preferred).
$qr_src = 'https://api.qrserver.com/v1/create-qr-code/?size=440x440&margin=0&qzone=1&data=' . rawurlencode($upi_string);

require __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; Hadhya &amp; Niyyat</p>
        <h1>Hadhya &amp; Niyyat Online</h1>
        <p>Fulfil your vows and contribute to the shrine — securely, from anywhere</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="pay-grid">
            <!-- QR / scan column -->
            <div class="qr-card reveal">
                <span class="eyebrow eyebrow--solo" style="justify-content:center">Scan &amp; Pay</span>
                <h3>Scan with any UPI App</h3>
                <div class="qr-frame">
                    <img src="<?= e($qr_src) ?>" alt="UPI QR code for Nagore Dargah Shariff Hadhya &amp; Niyyat" loading="lazy"
                         onerror="this.parentNode.innerHTML='<div style=\'color:#5d6b63;font-size:.9rem;padding:1rem\'>QR preview needs internet.<br>Use the UPI ID below to pay.</div>';">
                </div>
                <div class="upi-id">
                    <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zm0 4h3v4h-2v-2h-1v-2zm-5-4h2v2h-2v-2zm0 4h2v4h-2v-4z"/></svg>
                    <span id="upiText"><?= e($PAY['upi_id']) ?></span>
                    <button class="copy-btn" data-copy="<?= e($PAY['upi_id']) ?>">Copy</button>
                </div>
                <div class="app-badges">
                    <span>Google Pay</span><span>PhonePe</span><span>Paytm</span><span>BHIM</span><span>Any UPI App</span>
                </div>
            </div>

            <!-- Choose amount / purpose column -->
            <div class="reveal">
                <span class="eyebrow">Your Offering</span>
                <h2 style="margin-bottom:.6rem">Choose Your Hadhya</h2>
                <p style="color:var(--muted)">Select an amount and the purpose of your Niyyat, then pay by QR (above) or tap to open your UPI app on mobile.</p>

                <label class="form-field" style="display:block">
                    <span style="font-weight:500;color:var(--green-900);display:block;margin-bottom:.4rem">Amount (₹)</span>
                </label>
                <div class="amount-chips">
                    <button type="button" data-amount="101">₹101</button>
                    <button type="button" data-amount="251">₹251</button>
                    <button type="button" data-amount="501" class="active">₹501</button>
                    <button type="button" data-amount="1001">₹1001</button>
                    <button type="button" data-amount="2501">₹2501</button>
                </div>
                <div class="form-field">
                    <input type="number" id="customAmount" min="1" step="1" value="501" placeholder="Enter custom amount" aria-label="Custom amount">
                </div>

                <div class="form-field">
                    <span style="font-weight:500;color:var(--green-900);display:block;margin-bottom:.5rem">Purpose of Niyyat</span>
                    <div class="purpose-list">
                        <label><input type="radio" name="purpose" checked> <span><strong>General Hadhya</strong> — for the upkeep of the shrine</span></label>
                        <label><input type="radio" name="purpose"> <span><strong>Annadhanam</strong> — community feeding</span></label>
                        <label><input type="radio" name="purpose"> <span><strong>Fathiha &amp; Niyyat</strong> — fulfilment of a vow</span></label>
                        <label><input type="radio" name="purpose"> <span><strong>Uroos Contribution</strong> — for the annual festival</span></label>
                    </div>
                </div>

                <a id="payLink"
                   href="<?= e($upi_string) ?>"
                   data-pa="<?= e($PAY['upi_id']) ?>"
                   data-pn="<?= e($PAY['payee']) ?>"
                   data-tn="<?= e($PAY['note']) ?>"
                   data-upi="1"
                   class="btn btn--gold btn--lg" style="width:100%;justify-content:center">
                    <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-4.5-9.3-9.1C1.2 8.7 2.8 5.5 6 5.5c1.9 0 3.2 1 4 2.1.8-1.1 2.1-2.1 4-2.1 3.2 0 4.8 3.2 3.3 6.4C19 16.5 12 21 12 21z"/></svg>
                    Pay with UPI App
                </a>
                <p class="form-note mt-2">On a mobile device, the button opens your installed UPI app with the details pre-filled. On desktop, please scan the QR code.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--tint">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">How It Works</span>
            <h2>Three Simple Steps</h2>
        </div>
        <div class="grid grid--3">
            <div class="card reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8 8h8v8h-8v-8zm2 2v4h4v-4h-4zM13 3h8v8h-8V3zm2 2v4h4V5h-4zM3 13h6v2H5v4H3v-6z"/></svg></span>
                <h3>1. Scan or Tap</h3>
                <p>Scan the QR with any UPI app, or tap “Pay with UPI App” on your phone.</p>
            </div>
            <div class="card reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M12 1 3 5v6c0 5 3.8 9.4 9 11 5.2-1.6 9-6 9-11V5l-9-4zm-1 14-4-4 1.4-1.4L11 12.2l4.6-4.6L17 9l-6 6z"/></svg></span>
                <h3>2. Confirm Amount</h3>
                <p>Verify the payee as <strong><?= e($PAY['payee']) ?></strong>, enter your amount and approve with your UPI PIN.</p>
            </div>
            <div class="card reveal">
                <span class="card__icon"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 14-4-4 1.4-1.4L11 13.2l4.6-4.6L17 9l-6 7z"/></svg></span>
                <h3>3. Niyyat Fulfilled</h3>
                <p>Your Hadhya reaches the Dargah instantly. May your Niyyat be accepted. <span lang="ar" dir="rtl">آمين</span></p>
            </div>
        </div>
        <div class="card reveal mt-3" style="max-width:760px;margin-left:auto;margin-right:auto;background:#fff">
            <p style="margin:0;color:var(--muted);font-size:.92rem">
                <strong style="color:var(--green-900)">Note for administrators:</strong> Replace the placeholder UPI ID in
                <code>includes/config.php</code> with the official VPA, or place an official static QR at
                <code>assets/img/upi-qr.png</code>. For card / netbanking, a licensed payment gateway
                (Razorpay, PayU, CCAvenue or BillDesk) can be integrated here.
            </p>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
