<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}

// Hobbies database, each hobby has a title, a description and an array of images (path and alt text)
// $variable = new Hobby(title, description, [[image], [image], [image]]);

$cycling = new Hobby(
    "Cycling", 
    "I enjoy cycling as a way to stay active and explore the outdoors. It allows me to clear my mind and appreciate nature while getting some exercise.", 
    [
        [   
            "path" => "../Assets/Images/coloringpageshouse-bike-pixabay.jpg", 
            "alt" => "A person resting on a ground with a bicycle nearby, big view on ocean, cliffs and nature. - pixabay.com - ColoringPagesHouse"
        ],
        [
            "path" => "../Assets/Images/kimdaejeung-man-pixabay.jpg", 
            "alt" => "A person riding a bike on a road, surrounded by trees and nature. - pixabay.com - Kimdaejeung"
        ],
        [
            "path" => "../Assets/Images/pamjpat-bike-pixabay.jpg", 
            "alt" => "A bike standing alone on a road, surrounded by trees and nature. - pixabay.com - Pamjpat"
        ]
    ]
);

$gaming = new Hobby(
    "Gaming", 
    "Gaming has its purpose, for me it is to vehiculate stories and emotions, same as a movie, it doesn't need a sequel, it can be a one time experience, and that's what I like about it.", 
    [
        [   
            "path" => "../Assets/Images/denny-muller-MCBmsXCD4iY-unsplash.jpg", 
            "alt" => "An abandonned place, filled with nature. - unsplash.com - Denny Muller"
        ],
        [
            "path" => "../Assets/Images/max-ovcharenko-oC-eaWaqSOo-unsplash.jpg", 
            "alt" => "A firetruck close to falling from a broken bridge. - unsplash.com - Max Ovcharenko"
        ],
        [
            "path" => "../Assets/Images/max-ovcharenko-lRasZmy7E_o-unsplash.jpg", 
            "alt" => "Someone sitting on a chair, playing a guitar face to sunset. - unsplash.com - Max Ovcharenko"
        ]
    ]
);

$coding = new Hobby(
    "Coding", 
    "Coding is a way for me to create and bring my ideas to life. I love to start a project from scratch and see how it goes. Sometimes I am unhappy with the outcome, yet I always learn something new, always a place for improvement and creativity.", 
    [
        [   
            "path" => "../Assets/Images/joshua-reddekopp-SyYmXSDnJ54-unsplash.jpg", 
            "alt" => "A laptop on a table, almost closed. - unsplash.com - Joshua Reddekopp"
        ],
        [
            "path" => "../Assets/Images/safar-safarov-koOdUvfGr4c-unsplash.jpg", 
            "alt" => "Two screens, one with code on it, the other with documentation. - unsplash.com - Safar Safarov"
        ],
        [
            "path" => "../Assets/Images/jamesmarkosborne-code-1076536.jpg", 
            "alt" => "Lines of HTML code on a screen. - unsplash.com - James Mark Osborne"
        ]
    ]
);

$baking = new Hobby(   
    "Baking", 
    "It's kind of the same as coding, creating things from scratch, testing, failing, learning, improving. And of course de best part : tasting", 
    [
        [   
            "path" => "../Assets/Images/congerdesign-roll-of-dough-pixabay.jpg",
            "alt" => "A roll of dough - pixabay.com- Congerdesign"
        ],
        [   
            "path" => "../Assets/Images/dmarr515-cookies-pixabay.jpg",
            "alt" => "Cookies - pixabay.com- Dmarr515"
        ],
        [   
            "path" => "../Assets/Images/yousafbhutta-tiramisu-pixabay.jpg",
            "alt" => "A Tiramisu preparation - pixabay.com- Yousafbhutta"
        ],
    ]
);

$hobbies = [$baking, $cycling, $gaming, $coding];