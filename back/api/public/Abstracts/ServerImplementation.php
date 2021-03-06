<?php

namespace Abstracts;

use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;

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
        $this->app->addRoutingMiddleware();
        $this->app->addBodyParsingMiddleware();
        $this->app->addErrorMiddleware(true, true, true);

        return $this;
    }
}
