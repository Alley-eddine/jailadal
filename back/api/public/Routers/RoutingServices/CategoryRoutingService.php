<?php

namespace Routers\RoutingServices;

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

    public function httpMethodsCategoryService(Group $group): void
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
            return $this->service->getCategories($response);
        });
    }

    private function get(Group $group)
    {
        $group->get('/{id}', function (Response $response, string $id): Response {
            return $this->service->getCategory($response, $id);
        });
    }

    private function post(Group $group)
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createCategory($request, $response);
        });
    }

    private function put(Group $group)
    {
        $group->put('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->modifyCategory($request, $response, $id);
        });
    }

    private function delete(Group $group)
    {
        $group->delete('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteCategory($request, $response, $id);
        });
    }
}
