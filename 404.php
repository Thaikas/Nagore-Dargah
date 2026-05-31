<?php
http_response_code(404);
$page_title = 'Page Not Found';
$page_desc  = 'The page you are looking for could not be found.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner">
    <span class="page-banner__pattern"></span>
    <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;/&nbsp; 404</p>
        <h1>Page Not Found</h1>
        <p>The page you seek has wandered off the path. Let us guide you back.</p>
    </div>
</section>
<section class="section">
    <div class="container text-center">
        <p style="font-family:var(--f-display);font-size:5rem;color:var(--gold-500);margin:0">404</p>
        <p style="color:var(--muted);max-width:480px;margin:1rem auto 2rem">
            We couldn't find what you were looking for. It may have moved, or the link may be incomplete.
        </p>
        <div class="hero__actions" style="justify-content:center">
            <a href="index.php" class="btn btn--primary btn--lg">Return Home</a>
            <a href="contact.php" class="btn btn--outline btn--lg">Contact the Office</a>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
