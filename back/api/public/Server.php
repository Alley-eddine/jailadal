<?php

namespace Server;

use Abstracts\ServerImplementation;
use Router\Router;
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
        // print_r($this->app);
        return $this;
    }
    public function routing(){
        $this->router->httpGetMethodRoutingItemService();
    }
    public function start()
    {
        $this->initBaseServer()->routing();
        // $this->app->get('/items',[Router::class, 'httpGetMethodRoutingItemService']);
        $this->app->run();
    }
}
