<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\CategoryService;
use Slim\Routing\RouteCollectorProxy as Group;

class CategoryRoutingService
{
    private CategoryService $service;

    public function __construct()
    {
        $this->service = new CategoryService;
    }

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createCategory($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllCategories($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getCategory($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editCategory($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteCategory($request, $response, $id);
        });
    }
}
