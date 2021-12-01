<?php

namespace Abstracts;

use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

abstract class ServerImplementation
{
    protected App $app;

    protected function __construct()
    {
    }

    protected function initApp(): self
    {
        $this->app = AppFactory::create();

        return $this;
    }

    protected function addDecorator(bool $isActive): self
    {
        AppFactory::setSlimHttpDecoratorsAutomaticDetection($isActive);
        ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection($isActive);

        return $this;
    }

    protected function baseMiddleware(): self
    {
        $this->app->addRoutingMiddleware();
        $this->app->addBodyParsingMiddleware();

        return $this;
    }
}
