<?php
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Slim\Routing\RouteCollectorProxy as Proxy;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Controller\AuthenticationController;

require '../vendor/autoload.php';

// Create and setup API
AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

$app = AppFactory::create();

$routeCollector = $app->getRouteCollector();
$routeCollector->setDefaultInvocationStrategy(new RequestResponseArgs());

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, false, false);
$errorMiddleware->setDefaultErrorHandler($errorHandler);

//------------- Router part ---------------
// GET
$app->get('/', function (Request $request, Response $response) {
    // Get HTTP method (GET, POST, PUT, DELETE, ...)
    $method = $request->getMethod();

    // Get URI
    $uri = $request->getUri();

    // Get all headers
    $headers = $request->getHeaders();
    foreach ($headers as $name => $values) {
        echo $name . ": " . implode(", ", $values);
        echo '<br>';
    }
    echo '<br>';

    // Check a header exists and get its value if exists
    $userAgent = 'User-Agent';
    if ($request->hasHeader($userAgent)) {
        // Specific header values
        $specificHeaderValues = $request->getHeader($userAgent);
        foreach ($specificHeaderValues as $value) {
            echo $value;
            echo '<br>';
        }
        echo '<br>';
    
        // Specific header line
        $specificHeaderLine = $request->getHeaderLine($userAgent);
        echo "<span>$specificHeaderLine</span><br><br>";
    }

    // Get body
    $response->getBody()->write("<span>hello there</span><br>");

    return $response;
});

// POST
$app->post('/', function (Request $request, Response $response, $args): Response {
    $data = $request->getParsedBody();
    
    $html = var_export($data, true);
    $response->getBody()->write($html);
    
    return $response;
});

// Test group
$app->group('/hello', function (Proxy $group) {
    $group->get('', function (Request $request, Response $response) {
        $response->getBody()->write("<span>hello there</span>");
        return $response;
    });

    $group->get('/{name}', function (Request $request, Response $response, $name) {
        $response->getBody()->write("<span>hello $name</span>");
        return $response;
    });

    $group->group('/there', function (Proxy $group) {
        $group->get('/general-kenobi', function (Request $request, Response $response) {
            $response->getBody()->write("<span>hello there</span><br><span>general kenobi!</span>");
            return $response;
        });
    });
});

// Run API
$app->run();
