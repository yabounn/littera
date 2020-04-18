<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function(){
    require '../views/home/index.php';
}, 'home');

$router->map('GET', '/librairie', function(){
    require '../views/bookstore/index.php';
}, 'bookstore');

$match = $router->match();
// var_dump($match);
// exit();
$match["target"]();