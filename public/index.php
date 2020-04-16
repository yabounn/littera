<?php 
require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function(){
    require dirname(__DIR__) . '/views/home/index.php';
});

$match = $router->match();
$match['target']();