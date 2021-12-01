<?php

namespace ServerApp;

use Abstract\ServerImplementation;

class Server extends ServerImplementation
{
    private function initBaseServer(): self {
        parent::addDecorator(false);
        parent::initApp();
        parent::baseMiddleware();
        
        return $this;
    }
    
    public function start()
    {
        $this ->initBaseServer();
    }

    public function __construct()
    {
        parent::__construct();
    }
}
