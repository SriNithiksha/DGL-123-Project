<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/destination' => 'controllers/destination.php',
    '/packages' => 'controllers/packages.php',
    '/gallery' => 'controllers/gallery.php',
    '/signin' => 'controllers/signin.php',
    '/india' => 'controllers/india.php',
    '/payment' => 'controllers/payment.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
       abort();
    }
}

function abort($code = 404){
    http_response_code($code);

    echo "Sorry. Not found.";
   
    require "views/{$code}.php";

    die();
}
 
routeToController($uri, $routes);