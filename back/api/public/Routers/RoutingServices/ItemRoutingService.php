<?php

namespace Routers;

use Services\ItemService;
use Slim\Routing\RouteCollectorProxy as Group;

class ItemRoutingService
{
    public function getAllItems(Group $group): void
    {
        $group->get('', [ItemService::class, 'getAllItems']);
    }
}