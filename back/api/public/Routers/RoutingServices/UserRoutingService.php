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
        $group->get('', [UserService::class, 'getAllUsers']);
        $group->get('/{$id}', [UserService::class, 'getUser']);
        $group->put('/{$id}', [UserService::class, 'editUser']);
        $group->delete('/{$id}', [UserService::class, 'deleteUser']);
    }
}
