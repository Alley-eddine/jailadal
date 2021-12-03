<?php

namespace Models;

use Entities\Order;
use Models\EntityModel;

class OrderModel extends EntityModel
{
    protected $table = "order";

    public function createOrder(Order $order)
    {
        $this->validityCheck($order);

        $uuid = $this->newUuid();
        $query = $this->pdo->prepare(
            "INSERT INTO order
            (
                id
            )
            VALUES
            (
                $uuid,
            )"
        );

        return $this->save($query);
    }

    public function modifyOrder(Order $order, string $id)
    {
        $this->validityCheck($order);

        $query = $this->pdo->query(
            "UPDATE order
            SET
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
