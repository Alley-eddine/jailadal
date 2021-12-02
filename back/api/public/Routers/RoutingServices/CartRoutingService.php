<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\CartService;
use Slim\Routing\RouteCollectorProxy as Group;

class CartRoutingService
{
    private CartService $service;

    public function __construct()
    {
        $this->service = new CartService;
    }

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createCart($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllCarts($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getCart($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editCart($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteCart($request, $response, $id);
        });
    }
}
