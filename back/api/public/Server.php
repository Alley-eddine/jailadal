<?php

namespace PublicApi;

use Abstracts\ServerImplementation;
use Slim\App;

class Server extends ServerImplementation
{
    public function getPublicApi(): App
    {
        return $this->app;
    }

    public function __construct()
    {
        parent::__construct();
    }

    private function initBaseServer(): self
    {
        parent::addDecorator(false);
        parent::initApp();
        parent::baseMiddleware();

        return $this;
    }

    public function start()
    {
        $this->initBaseServer();
    }
}
