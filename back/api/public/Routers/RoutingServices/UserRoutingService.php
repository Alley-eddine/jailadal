<?php

namespace Routers;

use Services\UserService;
use Slim\Routing\RouteCollectorProxy as Group;

class UserRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [UserService::class, 'createUser']);
        $group->get('', [UserService::class, 'getAllUsers']);
        $group->get('/{$id}', [UserService::class, 'getUser']);
        $group->put('/{$id}', [UserService::class, 'editUser']);
        $group->delete('/{$id}', [UserService::class, 'deleteUser']);
    }
}
