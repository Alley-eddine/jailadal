<?php

namespace Routers;

use Routers\CartRoutingService;
use Routers\CategoryRoutingService;
use Routers\ItemRoutingService;
use Routers\OrderRoutingService;
use Routers\TableRoutingService;
use Routers\UserRoutingService;
use Slim\App;
use Slim\Routing\RouteCollectorProxy as Group;

class Router
{
    private App $app;
    private CartRoutingService $cartRoutingService;
    private CategoryRoutingService $categoryRoutingService;
    private ItemRoutingService $itemRoutingService;
    private OrderRoutingService $orderRoutingService;
    private TableRoutingService $tableRoutingService;
    private UserRoutingService $userRoutingService;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->cartRoutingService = new CartRoutingService;
        $this->categoryRoutingService = new CategoryRoutingService;
        $this->itemRoutingService = new ItemRoutingService;
        $this->orderRoutingService = new OrderRoutingService;
        $this->tableRoutingService = new TableRoutingService;
        $this->userRoutingService = new UserRoutingService;
    }

    public function cartRoutingService()
    {
        $this->app->group('/cart', function (Group $cartGroup): void {
            $this->cartRoutingService->listenRequests($cartGroup);
        });
    }

    public function categoryRoutingService()
    {
        $this->app->group('/category', function (Group $categoryGroup): void {
            $this->categoryRoutingService->listenRequests($categoryGroup);
        });
    }

    public function itemRoutingService()
    {
        $this->app->group('/item', function (Group $itemGroup): void {
            $this->itemRoutingService->listenRequests($itemGroup);
        });
    }

    public function orderRoutingService()
    {
        $this->app->group('/order', function (Group $orderGroup): void {
            $this->orderRoutingService->listenRequests($orderGroup);
        });
    }

    public function tableRoutingService()
    {
        $this->app->group('/table', function (Group $tableGroup): void {
            $this->tableRoutingService->listenRequests($tableGroup);
        });
    }

    public function userRoutingService()
    {
        $this->app->group('/user', function (Group $userGroup): void {
            $this->userRoutingService->listenRequests($userGroup);
        });
    }
}

