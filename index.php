<?php

//add the following PHP code to turn on error reporting:
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function (){
    echo "Pet Home";
    $view = new Template();
    echo $view ->render('views/home.html');
});
$f3->run();