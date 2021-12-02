<?php

namespace Middlewares;

use Middlewares\AuthenticationController;
use Entities\Services\ItemService;
use Entities\Services\OrderService;
use Entities\Services\TableService;
use Entities\Services\UserService;

use Slim\Routing\RouteCollectorProxy as Group;

class ItemMiddleware
{

    public function start()
    {
        // Authentication
        // $this->app->post('/authentication', [AuthenticationController::class, 'authenticate']);

        // User
        $this->app->group('/user', function (Group $userGroup): void {
            // $userGroup->post('', function(){});
            // $userGroup->get('', [UserController::class, 'getAllUsers']);
            // $userGroup->get('/{id}', [UserController::class, 'getUser']);
            // $userGroup->put('/{id}', [UserController::class, 'editUser']);
            // $userGroup->delete('/{id}', [UserController::class, 'deleteUser']);
        });

        // Item
        // $this->app->group('/item', function (Group $itemGroup): void {
        //     $itemGroup->post('', [ItemController::class, 'createItem']);
        //     $itemGroup->get('', [ItemController::class, 'getAllItems']);
        //     $itemGroup->get('/{id}', [ItemController::class, 'getItem']);
        //     $itemGroup->put('/{id}', [ItemController::class, 'editItem']);
        //     $itemGroup->delete('/{id}', [ItemController::class, 'deleteItem']);
        // });

        // Order
        // $this->app->group('/order', function (Group $orderGroup): void {
        //     $orderGroup->post('', [OrderController::class, 'createOrder']);
        //     $orderGroup->get('', [OrderController::class, 'getAllOrders']);
        //     $orderGroup->get('/{id}', [OrderController::class, 'getOrder']);
        //     $orderGroup->put('/{id}', [OrderController::class, 'editOrder']);
        //     $orderGroup->delete('/{id}', [OrderController::class, 'deleteOrder']);
        // });

        // Table
        // $this->app->group('/table', function (Group $tableGroup): void {
        //     $tableGroup->post('', [TableController::class, 'createTable']);
        //     $tableGroup->get('', [TableController::class, 'getAllTables']);
        //     $tableGroup->get('/{id}', [TableController::class, 'getTable']);
        //     $tableGroup->put('/{id}', [TableController::class, 'editTable']);
        //     $tableGroup->delete('/{id}', [TableController::class, 'deleteTable']);
        // });
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="/user" method="POST">
        <button type="submit">POST User</button>
    </form>

    <form action="/user" method="GET">
        <button type="submit">GET Users</button>
    </form>
    
    <form action="/user/00000000-0000-0000-0000-000000000000" method="GET">
        <button type="submit">GET User</button>
    </form>

    <form action="/user/00000000-0000-0000-0000-000000000000" method="PUT">
        <button type="submit">PUT User</button>
    </form>

    <form action="/user/00000000-0000-0000-0000-000000000000" method="DELETE">
        <button type="submit">DELETE User</button>
    </form>
</body>
</html>
