<?php

namespace Routers;

use Routers\RoutingServices\CartRoutingService;
use Routers\RoutingServices\CategoryRoutingService;
use Routers\RoutingServices\ItemRoutingService;
use Routers\RoutingServices\OrderRoutingService;
use Routers\RoutingServices\TableRoutingService;
use Routers\RoutingServices\UserRoutingService;
use Slim\App;
use Slim\Routing\RouteCollectorProxy as Group;

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
        $this->cartRoutingService = new CartRoutingService;
        $this->categoryRoutingService = new CategoryRoutingService;
        $this->orderRoutingService = new OrderRoutingService;
        $this->tableRoutingService = new TableRoutingService;
        $this->userRoutingService = new UserRoutingService;
    }

    public function cartRoutingService()
    {
        $this->app->group('/cart', function (Group $cartGroup): void {
            $this->cartRoutingService->httpMethodsCartService($cartGroup);
        });
    }

    public function categoryRoutingService()
    {
        $this->app->group('/category', function (Group $categoryGroup): void {
            $this->categoryRoutingService->httpMethodsCategoryService($categoryGroup);
        });
    }

    public function itemRoutingService()
    {
        $this->app->group('/item', function (Group $itemGroup): void {
            $this->itemRoutingService->httpMethodsItemService($itemGroup);
        });
    }

    public function orderRoutingService()
    {
        $this->app->group('/order', function (Group $orderGroup): void {
            $this->orderRoutingService->httpMethodsOrderService($orderGroup);
        });
    }

    public function tableRoutingService()
    {
        $this->app->group('/table', function (Group $tableGroup): void {
            $this->tableRoutingService->httpMethodsTableService($tableGroup);
        });
    }

    public function userRoutingService()
    {
        $this->app->group('/user', function (Group $userGroup): void {
            $this->userRoutingService->httpMethodsUserService($userGroup);
        });
    }
}
