<?php

namespace Routers\RoutingServices;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\OrderService;
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
        $this->getAll($group);
        $this->get($group);
        $this->post($group);
        $this->put($group);
        $this->delete($group);
    }

    private function getAll(Group $group)
    {
        $group->get('', function (Response $response): Response {
            return $this->service->getOrders($response);
        });
    }

    private function get(Group $group)
    {
        $group->get('/{id}', function (Response $response, string $id): Response {
            return $this->service->getOrder($response, $id);
        });
    }

    private function post(Group $group)
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createOrder($request, $response);
        });
    }

    private function put(Group $group)
    {
        $group->put('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->modifyOrder($request, $response, $id);
        });
    }

    private function delete(Group $group)
    {
        $group->delete('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteOrder($request, $response, $id);
        });
    }
}
