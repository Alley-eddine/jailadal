<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Entities\Services\CartService;
use Slim\Routing\RouteCollectorProxy as Group;

class CartRoutingService
{
    private CartService $service;

    public function __construct()
    {
        $this->service = new CartService;
    }

    public function httpMethodsCartService(Group $group): void
    {
        $this->httpGetMethod($group);
        $this->httpGetMethodWithUrlParams($group);
        $this->httpPostMethod($group);
        $this->httpDeleteMethod($group);
    }

    private function httpGetMethod(Group $group){
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getCarts($request, $response);
        });
    }

    private function httpGetMethodWithUrlParams(Group $group){
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editCartById($request, $response, $id);
        });
    }

    private function httpPostMethod(Group $group){
        $group->post('', function (Request $request, Response $response): Response {
            return $this->services->createCart($request, $response);
        });
    }

    private function httpDeleteMethod(Group $group){
        $group->delete('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteCartById($request, $response, $id);
        });
    }
}
