<?php

namespace Routers;

use Services\OrderService;
use Slim\Routing\RouteCollectorProxy as Group;

class OrderRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [OrderService::class, 'createOrder']);
        $group->get('', [OrderService::class, 'getAllOrders']);
        $group->get('/{$id}', [OrderService::class, 'getOrder']);
        $group->put('/{$id}', [OrderService::class, 'editOrder']);
        $group->delete('/{$id}', [OrderService::class, 'deleteOrder']);
    }
}
