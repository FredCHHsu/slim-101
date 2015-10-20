<?php
ini_set("display_errors", "On");
require 'vendor/autoload.php';

$config = require 'config.php';
$app = new \Slim\Slim($config);

$app->get('/', function() use($app) {
    // echo "<h1>Hello world</h1";
  $app->render('html.php');
});

$app->get('/blog/:alias', function($alias){
    echo '<h1>Here comes ' . $alias . '</h1>';
});

$app->run();