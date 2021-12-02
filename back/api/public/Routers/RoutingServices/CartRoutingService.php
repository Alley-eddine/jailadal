<?php

namespace Routers;

use Services\CartService;
use Slim\Routing\RouteCollectorProxy as Group;

class CartRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [CartService::class, 'createCart']);
        $group->get('', [CartService::class, 'getAllCarts']);
        $group->get('/{$id}', [CartService::class, 'getCart']);
        $group->put('/{$id}', [CartService::class, 'editCart']);
        $group->delete('/{$id}', [CartService::class, 'deleteCart']);
    }
}
