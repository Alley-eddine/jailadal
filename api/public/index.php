<?php

require '../vendor/autoload.php';

use Controller\AuthenticationController; 

use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;


AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

$app = AppFactory::create();

$routeCollector = $app->getRouteCollector();
$routeCollector->setDefaultInvocationStrategy(new RequestResponseArgs());

$app->get('/', function ($request, $response) {
    $response->getBody()->write("<span>hello there</span>");
    
    return $response;
});

$app->get('/hello/{name}', function ($request, $response, $name) {
    $response->getBody()->write("<span>$name</span>");
    
    return $response;
});

$app->run();
