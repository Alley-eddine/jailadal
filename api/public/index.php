<?php
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Slim\Routing\RouteCollectorProxy as Group;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Controller\AuthenticationController;

require '../vendor/autoload.php';

// Créer et setup l'API
AppFactory::setSlimHttpDecoratorsAutomaticDetection(false);
ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);

$app = AppFactory::create();
$callableResolver = $app->getCallableResolver();
$responseFactory = $app->getResponseFactory();

$routeCollector = $app->getRouteCollector();
$routeCollector->setDefaultInvocationStrategy(new RequestResponseArgs());

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, false, false);
$errorMiddleware->setDefaultErrorHandler($errorHandler);

//------------- Le router ---------------
// Exemple GET
$app->get('/test', function (Request $request, Response $response): Response {
    // HTTP method (GET, POST, PUT, DELETE, ...)
    $method = $request->getMethod();

    // URI
    $uri = $request->getUri();

    // Tous les headers
    $headers = $request->getHeaders();
    foreach ($headers as $name => $values) {
        echo $name . ": " . implode(", ", $values);
        echo '<br>';
    }
    echo '<br>';

    // Vérifier qu'un header existe puis y accéder
    $host = 'Host';
    if ($request->hasHeader($host)) {
        // Accéder aux valeurs d'un header spécifique
        $specificHeaderValues = $request->getHeader($host);
        foreach ($specificHeaderValues as $value) {
            echo $value;
            echo '<br>';
        }
        echo '<br>';
    
        // Accéder aux valeurs d'un header sous forme d'une string
        $specificHeaderLine = $request->getHeaderLine($host);
        echo "<span>$specificHeaderLine</span><br><br>";
    }

    // Récupérer le body
    $body = $request->getBody();

    $response->getBody()->write("<span>This is a GET method response test.</span><br><br>");
    
    return $response;
});

// POST
$app->post('/test', function (Request $request, Response $response): Response {
    $data = $request->getParsedBody();
    
    $html = var_export($data, true);
    $response->getBody()->write($html.'<br><br>');
    
    return $response;
});

// Groups
$app->group('/hello', function (Group $helloGroup): void {
    $helloGroup->get('', function (Request $request, Response $response): Response {
        $response->getBody()->write("<span>hello!</span>");
        return $response;
    });

    $helloGroup->get('/goodbye', function (Request $request, Response $response): Response {
        $response->getBody()->write("<span>hello!</span><br>");
        $response->getBody()->write("<span>goodbye.</span>");
        return $response;
    });

    $helloGroup->group('/there', function (Group $thereGroup): void {
        // ATTENTION : Si besoin d'une méthode avec un paramètre, elle doit être appelée après
        //             les méthodes statiques du même groupe pour éviter de masquer la lecture
        //             de ces dernières.

        // Méthode statique 1
        $thereGroup->get('', function (Request $request, Response $response): Response {
            $response->getBody()->write("<span>hello there</span>");
            return $response;
        });

        // Méthode statique 2
        $thereGroup->get('/general-kenobi', function (Request $request, Response $response): Response {
            $response->getBody()->write("<span>hello there</span><br><span>general kenobi!</span>");
            return $response;
        });

        // Méthode avec un paramètre
        $thereGroup->get('/{name}', function (Request $request, Response $response, $name) {
            $response->getBody()->write("<span>hello there</span><br><span>$name!</span>");
            return $response;
        });
    });
});

// Authentication
$app->post('/authentication', [AuthenticationController::class, 'authenticate']);

// Run API
$app->run();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <!-- POST test -->
    <form action="/test" method="POST">
        <input type="text" name="test1" placeholder="test1">
        <input type="text" name="test2" placeholder="test2">
        <input type="text" name="test3" placeholder="test3">
        <button type="submit">Tester le POST</button>
    </form>

    <!-- Authentication -->
    <form action="/authentication" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Authenticate</button>
    </form>
</body>
</html>
