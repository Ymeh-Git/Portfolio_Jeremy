<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}
// BTech Project
$btech = new Project(
    "BTech - Eco'Rando",
    "A project I did during an introduction to basics of HTML5 & CSS3, it took place at Lille - EuraTech, for 6 weeks, where I learned to do proper code. As final project, last 4 days I had to create a responsive website using only HTML and CSS, without JavaScript, or any framework or library. I chose to create a website about Eco-friendly hike, Eco'Rando.",
    [
        [
            "path" => "../Assets/Images/ecoRandoHome.png", 
            "alt" => "Screenshot of the BTech project showing the Eco'Rando website home page first view."
        ],
        [
            "path" => "../Assets/Images/ecoRandoPresentation.png", 
            "alt" => "Screenshot of the BTech project showing the Eco'Rando website presentation section."
        ],
        [
            "path" => "../Assets/Images/ecoRandoActivity.png", 
            "alt" => "Screenshot of the BTech project showing the Eco'Rando website activity section."
        ],
    ],
    "htmlcss",
    "https://github.com/Ymeh-Git/Site-3-pages-HTML-CSS-ONLY",
    "https://ymeh-git.github.io/Site-3-pages-HTML-CSS-ONLY/index.html"
);

//Button
$btn = new Project(
    "Learning - Button project",
    "A tiny little project I did to train myself on how to create a button with only CSS, I wanted to create a button with a cool hover effect, and I ended up with this one, which I really like.",
    [
        [
            "path" => "../Assets/Images/Btn_Git_CodeSnap.jpeg", 
            "alt" => "Screenshot of the Button CSS."
        ],
        [
            "path" => "../Assets/Images/btn1.png", 
            "alt" => "Screenshot of the Button project showing the button in its default state."
        ],
        [
            "path" => "../Assets/Images/btn2.png", 
            "alt" => "Screenshot of the Button project showing the button in its hover state."
        ],
    ],
    "htmlcss",
    "https://github.com/Ymeh-Git/btn-linear-gradient",
);

//Flip Card
$flipCard = new Project(
    "Learning - Flip Card project",
    "A tiny little project I did to train myself on how to create a flip card with only CSS, without any JavaScript.",
    [
        [
            "path" => "../Assets/Images/Flip_Card_Git_CodeSnap.png", 
            "alt" => "Screenshot of the Flip Card project."
        ],
        [
            "path" => "../Assets/Images/fc1.png", 
            "alt" => "Screenshot of the Flip Card project showing the card in its default state."
        ],
        [
            "path" => "../Assets/Images/fc2.png", 
            "alt" => "Screenshot of the Flip Card project showing the card in its hover state."
        ],
    ],
    "htmlcss",
    "https://github.com/Ymeh-Git/flip-card-only-html-css",
);

//How to access a database (PHP)
$accessDB = new Project(
    "Learning - Access Database project",
    "A project I did to train myself on how to access a database with PHP.",
    [
        [
            "path" => "../Assets/Images/db1.png", 
            "alt" => "Screenshot of the Access Database project."
        ],
        [
            "path" => "../Assets/Images/db2.png", 
            "alt" => "Screenshot of the query."
        ],
        [
            "path" => "../Assets/Images/db3.png", 
            "alt" => "Screenshot of how to use database results in PHP."
        ],
    ],
    "php",
    "https://github.com/Ymeh-Git/Exercise-to-learn-how-to-access-DataBase/tree/main",
);

//Training to create a site from scratch with PhP
$phpFromScratch = new Project(
    "Learning - Create Site from Scratch project",
    "A project I did originally to train myself, but I ended up creating exercises for everyone. It is not a manual, but it is more a set of exercises to train yourself, with a lot of comments to understand how to do it and where to look for information.",
    [
        [
            "path" => "../Assets/Images/learning_php1.png", 
            "alt" => "Screenshot of conditions exercises."
        ],
        [
            "path" => "../Assets/Images/learning_php2.png", 
            "alt" => "Screenshot of environment setup."
        ],
        [
            "path" => "../Assets/Images/learning_php3.png", 
            "alt" => "Screenshot of array and functions."
        ],
    ],
    "php",
    "https://github.com/Ymeh-Git/Learn-how-to-create-site-from-0-with-PHP-MySQL",
);

$projects = [$btech, $btn, $flipCard, $accessDB, $phpFromScratch];

$htmlcss =[];
$python = [];
$javascript = [];
$react = [];
$php = [];

foreach($projects as $project) {
    switch($project->getLanguage()) {
        case "htmlcss":
            $htmlcss[] = $project;
            break;
        case "python":
            $python[] = $project;
            break;
        case "javascript":
            $javascript[] = $project;
            break;
        case "react":
            $react[] = $project;
            break;
        case "php":
            $php[] = $project;
            break;
    }
}