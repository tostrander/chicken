<?php

/* Tina O
 * 01-15-2020
 * /328/chicken/index.php
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::instance();

//Instantiate controller object
$controller = new ChickenController($f3);

//Define a default route
$f3->route('GET /', function() {

    //global $controller;
    //$controller->home();

    $GLOBALS['controller']->home();

});

//Define another route
$f3->route('GET /eggs', function() {

    $GLOBALS['controller']->eggs();

});

//Run F3
$f3->run();