<?php

namespace Routers;

use Abstracts\RouterImplementation;
use Routers\ItemRoutingService;
use Slim\App;
use Slim\Routing\RouteCollectorProxy as Group;

class Router
{
    private App $app;
    private ItemRoutingService $itemRoutingService;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->itemRoutingService = new ItemRoutingService;
    }

    public function itemRoutingService()
    {
        $this->app->group('/item', function (Group $itemGroup): void {
            $this->itemRoutingService->getAllItems($itemGroup);
        });
    }
}
