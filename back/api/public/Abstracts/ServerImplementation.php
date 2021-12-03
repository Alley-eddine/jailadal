<?php

namespace Abstracts;

use Middlewares\AuthenticationMiddleware;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Throwable;

abstract class ServerImplementation
{
    protected App $app;

    protected function __construct()
    {
    }

    protected function initApp(): self
    {
        $this->app = AppFactory::create();
        $routeCollector = $this->app->getRouteCollector();
        $routeCollector->setDefaultInvocationStrategy(new RequestResponseArgs());

        return $this;
    }

    protected function addDecorator(bool $enabled): self
    {
        AppFactory::setSlimHttpDecoratorsAutomaticDetection($enabled);
        ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection($enabled);

        return $this;
    }

    protected function baseMiddleware(): self
    {
        // Add Routing Middleware
        $this->app->addRoutingMiddleware();
        $this->app->addBodyParsingMiddleware();
        
        // Define Custom Error Handler
        $app = $this->app;
        $customErrorHandler = function (
            Throwable $exception,
        ) use ($app) {
            $payload = ['error' => $exception->getMessage()];
            
            $response = $app->getResponseFactory()->createResponse();
            $response->getBody()->write(
                json_encode($payload, JSON_UNESCAPED_UNICODE)
            );

            var_dump($response);
            return $response;
        };
        
        // Add Error Middleware
        $errorMiddleware = $this->app->addErrorMiddleware(true, true, true);
        $errorMiddleware->setDefaultErrorHandler($customErrorHandler);

        $this->app->add(new AuthenticationMiddleware());

        return $this;
    }
}
