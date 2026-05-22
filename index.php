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
require_once('./Includes/Class/hobby.php');
require_once('./Includes/Class/project.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/Css/styles.css">
    <link rel="stylesheet" href="./Assets/Css/mobile.css">
    <script src="./Assets/Js/scripts.js" defer></script>
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
                        alt="Home icon - Earth - Flaticon - Thanks to Freepik for this icon"
                        class="tabbar-link-img">
                    <p>Home</p>
                </div>
            </a>
            <a href="./index.php?route=about" class="tabbar-link <?= $page == "about" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "about" ? "./Assets/Icons/aboutActive.png" : "./Assets/Icons/about.png" ?>"
                        alt="About me icon - Astronaut helmet - Flaticon - Thanks to Freepik for this icon"
                        class="tabbar-link-img">
                    <p>About me</p>
                </div>
            </a>
            <a href="./index.php?route=hobbies" class="tabbar-link <?= $page == "hobbies" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "hobbies" ? "./Assets/Icons/hobbiesActive.png" : "./Assets/Icons/hobbies.png" ?>"
                        alt="Hobbies icon - Milky way - Flaticon - Thanks to Freepik for this icon"
                        class="tabbar-link-img">
                    <p>Hobbies</p>
                </div>
            </a>
            <a href="./index.php?route=projects" class="tabbar-link <?= $page == "projects" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "projects" ? "./Assets/Icons/projectsActive.png" : "./Assets/Icons/projects.png" ?>"
                        alt="Projects icon - Rocket - Flaticon - Thanks to Freepik for this icon"
                        class="tabbar-link-img">
                    <p>Projects</p>
                </div>
            </a>
            <a href="./index.php?route=contact" class="tabbar-link <?= $page == "contact" ? "active" : "" ?>">
                <div class="tabbar-link-button">
                    <img 
                        src="<?= $page == "contact" ? "./Assets/Icons/contactActive.png" : "./Assets/Icons/contact.png" ?>"
                        alt="Contact icon - Satellite - Flaticon - Thanks to Freepik for this icon"
                        class="tabbar-link-img">
                    <p>Contact</p>
                </div>
            </a>
        </nav>
    </header>
    <main>
        <?php if($page == "home"):?>
            <video 
            src="./Assets/Video/AiVreaSaStii_Pixabay_HD.mp4" 
            alt="Video background - Pixabay - Thanks to AiVreaSaStii for this video" 
            class="home-video-background" autoplay muted loop></video>
            <div class="home-background"></div>
        <?php else: ?>
            <div class="other-page-background"></div>
        <?php endif; ?>
        <!-- Main content will be here -->
        <?php require "Template/" . $page . ".php"; ?>
    </main>
    <footer>
        <p>&copy; 2026 My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>