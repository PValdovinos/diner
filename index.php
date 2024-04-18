<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);
// 328/diner/index.php
// This is my CONTROLLER

// Turn on error reporting
require_once ('vendor/autoload.php');

// Instantiate base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){
    //echo '<h1>Welcome to my diner app!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /menus/breakfast', function(){
    echo '<h1>My Breakfast Menu</h1>';

    /*
     * Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
    */
});

// Run Fat-Free
$f3->run();

?>