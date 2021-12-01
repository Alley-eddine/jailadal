<?php
namespace routing;
use Slim\Factory\AppFactory;

class PublicRouter {
    private AppFactory $app;
    public function __construct(AppFactory $app)
    {
        $this->app = $app;
    }
}


?>