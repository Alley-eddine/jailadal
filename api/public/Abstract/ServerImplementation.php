<?php

namespace Abstract;

use Controller\AuthenticationController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;

abstract class ServerImplementation
{
  protected  $app;

  protected function __construct()
  {
  }

  protected function initApp(): self
  {
    $this->app = AppFactory::create();
    return $this;
  }

  protected function addDecorator(bool $active): self
  {
    AppFactory::setSlimHttpDecoratorsAutomaticDetection($active);
    ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection($active);
    return $this;
  }

  protected function baseMiddleware(): self
  {
    $this->app->addRoutingMiddleware();
    $this->app->addBodyParsingMiddleware();
    return $this;
  }
}
