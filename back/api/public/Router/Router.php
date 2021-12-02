<?php
   namespace Router;

   use Slim\App;
   use Abstracts\RouterImplementation;
   use Slim\Routing\RouteCollectorProxy;
   
    class Router {
        private App $app;
        public function __construct(App $app)
        {
            print_r($app);
            $this->app = $app;
        }

        public function httpGetMethodRoutingItemService(){
            $this->app->get('/items', function($request, $response){
                $response->getBody()->write("<p>items</p>");
                return $response;
            });
        }
    }

?>