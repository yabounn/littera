<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function(){
    require '../views/home/index.php';
}, 'home');

$match = $router->match();
// var_dump($match);
// exit();
$match["target"]();