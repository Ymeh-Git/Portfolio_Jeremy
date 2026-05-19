<?php
// In a previous project to restrain access by URL, I did something like this :
define('ACCESS_GRANTED', true);
// Then on every Template I paste this :

// if (!defined('ACCESS_GRANTED')) {
//     http_response_code(403);
//     exit();
// }

// Which means that if someone try to access directly to a Template, he will get an error 403 (Forbidden) since the constant "ACCESS_GRANTED" is not defined.
// So there is only one way to access is though the index.php?route=[...], even if you try to access a route that doesn't exist you will get error 404(Page not found).

require("Router/route.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/Css/styles.css">
    <title>Portfolio - <?= $title ?></title>
</head>
<body>
    <header>
        <!-- TODO : add my navigation menu here -->
        <nav>
            <a href="./index.php?route=home" class="nav-link <?= $page == "home" ? "active" : "" ?>">Home</a>
            <a href="./index.php?route=about" class="nav-link <?= $page == "about" ? "active" : "" ?>">About me</a>
            <a href="./index.php?route=hobbies" class="nav-link <?= $page == "hobbies" ? "active" : "" ?>">Hobbies</a>
            <a href="./index.php?route=projects" class="nav-link <?= $page == "projects" ? "active" : "" ?>">Projects</a>
            <a href="./index.php?route=contact" class="nav-link <?= $page == "contact" ? "active" : "" ?>">Contact me</a>
        </nav>
    </header>
    <main>
        <!-- Main content will be here -->
        <?php require "Template/" . $page . ".php"; ?>
    </main>
    <footer>
        <p>&copy; 2026 My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>