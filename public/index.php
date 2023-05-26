<?php

declare(strict_types=1);

use DI\Bridge\Slim\Bridge;

require __DIR__ . '/../vendor/autoload.php';


//Set Session name
session_name('my-api');
session_start();

//Register Dependencies
$container = new DI\Container([
    // place your definitions here
]);

//Create App
$app = Bridge::create($container);

$app->addBodyParsingMiddleware();


//Define Routes

//After login you can view this route
$app->get('/', \Example\HelloWorldRoute::class);
$app->get('/hello', \Example\HelloWorldRoute::class);

//Run App
$app->run();

//Close Session
session_write_close();