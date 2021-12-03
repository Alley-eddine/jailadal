<?php

namespace Routers\RoutingServices;

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

    public function httpMethodsItemService(Group $group): void
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
            return $this->service->getItems($response);
        });
    }

    private function get(Group $group)
    {
        $group->get('/{id}', function (Response $response, string $id): Response {
            return $this->service->getItem($response, $id);
        });
    }

    private function post(Group $group)
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createItem($request, $response);
        });
    }

    private function put(Group $group)
    {
        $group->put('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->modifyItem($request, $response, $id);
        });
    }

    private function delete(Group $group)
    {
        $group->delete('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteItem($request, $response, $id);
        });
    }
}
