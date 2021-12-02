<?php

namespace Routers;

use Services\CategoryService;
use Slim\Routing\RouteCollectorProxy as Group;

class CategoryRoutingService
{
    public function listenRequests(Group $group): void
    {
        $group->post('', [CategoryService::class, 'createCategory']);
        $group->get('', [CategoryService::class, 'getAllCategories']);
        $group->get('/{$id}', [CategoryService::class, 'getCategory']);
        $group->put('/{$id}', [CategoryService::class, 'editCategory']);
        $group->delete('/{$id}', [CategoryService::class, 'deleteCategory']);
    }
}
