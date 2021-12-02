<?php

namespace Api;

use Abstracts\ServerImplementation;
use Routers\Router;

class Server extends ServerImplementation
{
    private Router $router;

    public function __construct()
    {
        parent::__construct();
    }

    private function initBaseServer(): self
    {
        parent::addDecorator(false);
        parent::initApp();
        parent::baseMiddleware();
        $this->router = new Router($this->app);

        return $this;
    }

    public function routing()
    {
        $this->router->itemRoutingService();
    }

    public function start()
    {
        $this->initBaseServer()->routing();
        $this->app->run();
    }
}
