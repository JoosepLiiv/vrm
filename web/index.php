<?php 

// web/index.php
// using Silex framework
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions
$app['debug'] = true;

$app['debug'] = true;

// using Twig template framework
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/../views',
]);

// Using Doctrine DBAL
$app->register(new Silex\Provider\DoctrineServiceProvider(), [
	'db.options' => [
		'driver' => 'pdo_sqlite',
		'path' => __DIR__.'/../database/app.db',
	],
]);


$app->get('/bookings/create', function () use ($app) {

	return $app['twig']->render('base.html.twig');

});

$app->run();

?>