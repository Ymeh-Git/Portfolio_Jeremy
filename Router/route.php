<?php
// DEFAULT ROUTE
$page = "home"; 
$title = "Home";

// How to add a new route
// $availableRoutes = 
// [
    // "filePath" => 
    // [
    //      "name" => name for conditions ("active" : "")
    //      "title" => your title of navigation tab
    // ]
// ]

$availableRoutes = 
[
    // Homepage
    'home'    => 
    [
        'name' => 'home', // Customizable
        'title' => 'Homepage', // Customizable
    ],

    // About page
    'about' =>  
    [
        'name' => 'about',
        'title' => 'About', 
    ],

    // Hobbies page
    'hobbies' =>  
    [
        'name' => 'hobbies',
        'title' => 'Hobbies', 
    ],

    // Projects page
    'projects' =>  
    [
        'name' => 'projects',
        'title' => 'Projects', 
    ],

    // Contact page
    'contact'   => 
    [
        'name' => 'contact',
        'title' => 'Contact', 
    ],
];

// If the route exist in the url, we will use it, else we will use the default one
if(!empty($_GET['route'])){
    $page = $_GET['route'];
}

//If $page exist in $availableRoutes, we will use it, else we will use the default one
if(array_key_exists($page, $availableRoutes)) {
    $title = $availableRoutes[$page]['title'];
} else {
    // else Error 404 since your page as not been found
    http_response_code(404);
    $page = 'Error/error404';
    $title = 'Page not found';
}