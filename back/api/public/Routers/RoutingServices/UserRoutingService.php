<?php

namespace Routers;

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

    public function listenRequests(Group $group): void
    {
        $group->post('', function (Request $request, Response $response): Response {
            return $this->service->createUser($request, $response);
        });
        $group->get('', function (Request $request, Response $response): Response {
            return $this->service->getAllUsers($request, $response);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->getUser($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->editUser($request, $response, $id);
        });
        $group->get('/{$id}', function (Request $request, Response $response, string $id): Response {
            return $this->service->deleteUser($request, $response, $id);
        }); 
    }
}
