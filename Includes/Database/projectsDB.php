<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}

$bTech = new Project(
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
    "html&css",
    "https://github.com/Ymeh-Git/Site-3-pages-HTML-CSS-ONLY",
    "https://ymeh-git.github.io/Site-3-pages-HTML-CSS-ONLY/index.html"
);