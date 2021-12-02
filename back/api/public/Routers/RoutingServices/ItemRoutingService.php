<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\ItemService;
use Slim\Routing\RouteCollectorProxy as Group;

class ItemRoutingService
{
    private ItemService $service;

    public function __construct()
    {
        $this->service = new ItemService;
    }

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createItem($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllItems($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getItem($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editItem($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteItem($request, $response, $id);
        });
    }
}
