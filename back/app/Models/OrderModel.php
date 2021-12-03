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
        $status = $order->getStatus();
        $date = $order->getDate();
        $rating = $order->getRating();
        $usr_id = $order->getUsrId();

        $query = $this->pdo->prepare(
            "INSERT INTO order
            (
                id,
                odr_status,
                odr_date,
                odr_rating,
                usr_id
            )
            VALUES
            (
                $uuid,
                $status,
                $date,
                $rating,
                $usr_id
            )"
        );
        return $this->save($query);
    }

    public function modifyOrder(Order $order, string $id)
    {
        $this->validityCheck($order);
        
        $status = $order->getStatus();
        $date = $order->getDate();
        $rating = $order->getRating();
        $usr_id = $order->getUsrId();

        $query = $this->pdo->query(
            "UPDATE table
            SET
            odr_status = $status, 
            odr_date = $date,
            odr_rating = $rating,
            usr_id = $usr_id
            WHERE
            id = $id"
        );
        return $this->save($query);
    }
}
