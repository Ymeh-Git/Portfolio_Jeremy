<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}
?>

<h1>Page Not Found</h1>
<a href="../index.php">Go back to homepage</a>