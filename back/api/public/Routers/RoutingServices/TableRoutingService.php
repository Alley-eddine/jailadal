<?php

namespace Routers;

use Services\TableService;
use Slim\Routing\RouteCollectorProxy as Group;

class TableRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [TableService::class, 'createTable']);
        $group->get('', [TableService::class, 'getAllTables']);
        $group->get('/{$id}', [TableService::class, 'getTable']);
        $group->put('/{$id}', [TableService::class, 'editTable']);
        $group->delete('/{$id}', [TableService::class, 'deleteTable']);
    }
}
