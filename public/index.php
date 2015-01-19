<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Slim\Slim();

$app->contentType('application/json');

$app->get('/village', function() {
	$vill	= Village::take(10)->get()->toJson();
	echo $vill;
});

$app->get('/', function() {
	$vill	= Village::take(10)->get()->toJson();
	echo $vill;
});

$app->run();
