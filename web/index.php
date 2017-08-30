<?php 

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions
$app['debug'] = true;

$app['debug'] = true;

$app->get('/hello', function () {

	return "Hello world!";

});


$app->run();

?>