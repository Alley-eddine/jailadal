<?php

namespace Routers\RoutingServices;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Services\UserService;
use Slim\Routing\RouteCollectorProxy as Group;

class UserRoutingService
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService;
    }

    public function httpMethodsUserService(Group $group): void
    {
        $this->getAll($group);
        $this->get($group);
        $this->post($group);
        $this->put($group);
        $this->delete($group);
    }

    private function getAll(Group $group)
    {
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getUsers($response);
        });
    }

    private function get(Group $group)
    {
        $group->get('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getUser($response, $id);
        });
    }

    private function post(Group $group)
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createUser($request, $response);
        });
    }

    private function put(Group $group)
    {
        $group->put('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->modifyUser($request, $response, $id);
        });
    }

    private function delete(Group $group)
    {
        $group->delete('/{id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteUser($request, $response, $id);
        });
    }
}
