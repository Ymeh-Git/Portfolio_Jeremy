<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}
?>
<section class="error-section">
    <h1>Error 404 - Page Not Found</h1>
    <a href="../index.php?route=home" class="btn">Go back to homepage</a>
</section>