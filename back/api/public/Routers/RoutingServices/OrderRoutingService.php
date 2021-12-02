<?php

namespace Routers;

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

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createOrder($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllOrders($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getOrder($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editOrder($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteOrder($request, $response, $id);
        });
    }
}
