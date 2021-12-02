<?php

namespace Routers;

use Services\ItemService;
use Slim\Routing\RouteCollectorProxy as Group;

class ItemRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [ItemService::class, 'createItem']);
        $group->get('', [ItemService::class, 'getAllItems']);
        $group->get('/{$id}', [ItemService::class, 'getItem']);
        $group->put('/{$id}', [ItemService::class, 'editItem']);
        $group->delete('/{$id}', [ItemService::class, 'deleteItem']);
    }
}
