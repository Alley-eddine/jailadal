<?php

namespace Routers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Entities\Services\CategoryService;
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
        $this->httpGetMethod($group);
        $this->httpGetMethodWithUrlParams($group);
        $this->httpPostMethod($group);
        $this->httpDeleteMethod($group);
    }

    private function httpGetMethod(Group $group){
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getCategories($request, $response);
        });
    }

    private function httpGetMethodWithUrlParams(Group $group){
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editCategoryById($request, $response, $id);
        });
    }

    private function httpPostMethod(Group $group){
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createCategory($request, $response);
        });
    }

    private function httpDeleteMethod(Group $group){
        $group->delete('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteCategoryById($request, $response, $id);
        });
    }
}
