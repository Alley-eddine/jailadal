<?php

namespace Routers;

use Routers\RoutingServices\ItemRoutingService;
// use Routers\CartRoutingService;
// use Routers\CategoryRoutingService;
// use Routers\OrderRoutingService;
// use Routers\TableRoutingService;
// use Routers\UserRoutingService;
use Slim\App;
use Slim\Routing\RouteCollectorProxy as Group;
use Api\IRequestResponseArgs;
class Router
{
    private App $app;
    private ItemRoutingService $itemRoutingService;
    private CartRoutingService $cartRoutingService;
    private CategoryRoutingService $categoryRoutingService;
    private OrderRoutingService $orderRoutingService;
    private TableRoutingService $tableRoutingService;
    private UserRoutingService $userRoutingService;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->itemRoutingService = new ItemRoutingService;
        // $this->cartRoutingService = new CartRoutingService;
        // $this->categoryRoutingService = new CategoryRoutingService;
        // $this->orderRoutingService = new OrderRoutingService;
        // $this->tableRoutingService = new TableRoutingService;
        // $this->userRoutingService = new UserRoutingService;
    }

    // public function cartRoutingService()
    // {
    //     $this->app->group('/cart', function (Group $cartGroup): void {
    //         $this->cartRoutingService->listenRequests($cartGroup);
    //     });
    // }

    // public function categoryRoutingService()
    // {
    //     $this->app->group('/category', function (Group $categoryGroup): void {
    //         $this->categoryRoutingService->listenRequests($categoryGroup);
    //     });
    // }

    public function itemRoutingService()
    {
        $this->app->group('/item', function (Group $itemGroup): void {
            $this->itemRoutingService->httpMethodsItemService($itemGroup);
        });
    }

    public function orderRoutingService()
    {
        $this->app->group('/order', function (Group $orderGroup): void {
            $this->orderRoutingService->listenRequests($orderGroup);
        });
    }

    // public function tableRoutingService()
    // {
    //     $this->app->group('/table', function (Group $tableGroup): void {
    //         $this->tableRoutingService->listenRequests($tableGroup);
    //     });
    // }

    // public function userRoutingService()
    // {
    //     $this->app->group('/user', function (Group $userGroup): void {
    //         $this->userRoutingService->listenRequests($userGroup);
    //     });
    // }
}

