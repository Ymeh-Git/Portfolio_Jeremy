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
    <link rel="stylesheet" href="./Assets/Css/mobile.css">
    <title>Portfolio - <?= $title ?></title>
</head>
<body>
    <header>
        <!-- TODO : add my navigation menu here -->
        <nav class="tabbar">
            <a href="./index.php?route=home" class="tabbar-link <?= $page == "home" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "home" ? "./Assets/Icons/homeActive.png" : "./Assets/Icons/home.png" ?>"
                        alt="Home"
                        class="tabbar-link-img">
                    <p>Home</p>
                </div>
            </a>
            <a href="./index.php?route=about" class="tabbar-link <?= $page == "about" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "about" ? "./Assets/Icons/aboutActive.png" : "./Assets/Icons/about.png" ?>"
                        alt="About me"
                        class="tabbar-link-img">
                    <p>About me</p>
                </div>
            </a>
            <a href="./index.php?route=hobbies" class="tabbar-link <?= $page == "hobbies" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "hobbies" ? "./Assets/Icons/hobbiesActive.png" : "./Assets/Icons/hobbies.png" ?>"
                        alt="Hobbies"
                        class="tabbar-link-img">
                    <p>Hobbies</p>
                </div>
            </a>
            <a href="./index.php?route=projects" class="tabbar-link <?= $page == "projects" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "projects" ? "./Assets/Icons/projectsActive.png" : "./Assets/Icons/projects.png" ?>"
                        alt="Projects"
                        class="tabbar-link-img">
                    <p>Projects</p>
                </div>
            </a>
            <a href="./index.php?route=contact" class="tabbar-link <?= $page == "contact" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "contact" ? "./Assets/Icons/contactActive.png" : "./Assets/Icons/contact.png" ?>"
                        alt="Contact me"
                        class="tabbar-link-img">
                    <p>Contact me</p>
                </div>
            </a>
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