<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Entities\Services\OrderService;
use Slim\Routing\RouteCollectorProxy as Group;

class OrderRoutingService
{
    private OrderService $service;

    public function __construct()
    {
        $this->service = new OrderService;
    }

    public function httpMethodsOrderService(Group $group): void
    {
        $this->httpGetMethod($group);
        $this->httpGetMethodWithUrlParams($group);
        $this->httpPostMethod($group);
        $this->httpDeleteMethod($group);
    }

    private function httpGetMethod(Group $group){
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getOrders($request, $response);
        });
    }

    private function httpGetMethodWithUrlParams(Group $group){
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editOrderById($request, $response, $id);
        });
    }

    private function httpPostMethod(Group $group){
        $group->post('', function (Request $request, Response $response): Response {
            return $this->services->createOrder($request, $response);
        });
    }

    private function httpDeleteMethod(Group $group){
        $group->delete('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteOrderById($request, $response, $id);
        });
    }
}
