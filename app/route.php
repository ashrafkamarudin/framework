<?php

// Defining routes, from specific...
$app->get('/hello(/:name)', function ($name = 'anonymous') use ($app, $log) {
    $greeter = new Lyt\lib\Helpers\Hello($name);
    echo $greeter->greet();
    $log->info("Just logging $name visit...");
});

$app->get('/about', function () use ($app, $log) {
    echo "<h1>About ", $app->config('name'), "</h1>";
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    echo "<p><small>Current mode is: ", $app->config('mode'), '</small></p>';
});

// To generic
$app->get('/', function () use ($app, $log) {
    echo '<h1>Welcome to ', $app->config('name'), '</h1>';
});

$app->get('/test', function () use ($app, $log) {
	$controller = new Lyt\Controller\TestController();

	echo $controller->index();
});