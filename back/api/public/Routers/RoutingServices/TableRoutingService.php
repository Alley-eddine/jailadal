<?php

namespace Routers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\TableService;
use Slim\Routing\RouteCollectorProxy as Group;

class TableRoutingService
{
    private TableService $service;

    public function __construct()
    {
        $this->service = new TableService;
    }

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createTable($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllTables($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getTable($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editTable($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteTable($request, $response, $id);
        });
    }
}
