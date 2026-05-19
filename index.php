<?php
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