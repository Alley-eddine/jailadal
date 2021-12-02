<?php

namespace Routers\RoutingServices;

use Entities\Services\ItemService;
use Entities\Services\CategoryService;
use Entities\Services\CartService;
use Entities\Services\OrderService;
use Entities\Services\TableService;
use Entities\Services\UserService;

use Slim\Routing\RouteCollectorProxy as Group;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ItemRoutingService
{
    private ItemService $service;

    public function __construct()
    {
        $this->service = new ItemService;
    }

    public function httpMethodsItemService(Group $group): void
    {
        $this->httpGetMethod($group);
        $this->httpGetMethodWithUrlParams($group);
        $this->httpPostMethod($group);
        $this->httpDeleteMethod($group);
    }

    private function httpGetMethod(Group $group){
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getItems($request, $response);
        });
    }

    private function httpGetMethodWithUrlParams(Group $group){
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editItemById($request, $response, $id);
        });
    }

    private function httpPostMethod(Group $group){
        $group->post('', function (Request $request, Response $response): Response {
            return $this->services->createItem($request, $response);
        });
    }

    private function httpDeleteMethod(Group $group){
        $group->delete('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteItemById($request, $response, $id);
        });
    }

    // public function httpMethodsOrderService(Group $group){
    //     $group->get('', function (Request $request, Response $response): Response {
    //         return $this->services[OrderService::class]->getItems($request, $response);
    //     });

    //     $group->post('', function (Request $request, Response $response): Response {
    //         return $this->services[OrderService::class]->postOrder($request, $response);
    //     });

    //     // url Params

    //     // $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
    //     //     return $this->services[OrderService::class]->editOrderById($request, $response, $id);
    //     // });

    //     // $group->delete('/{$id}', function (Request $request, Response $response, string $id): Response {
    //     //     return $this->services[OrderService::class]->deleteOrderById($request, $response, $id);
    //     // });
    // }
}
