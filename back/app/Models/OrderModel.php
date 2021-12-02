<?php

namespace Models;

use DateTime;
use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderModel extends DefaultModel
{
    public function getAllOrders()
    {
        $query = $this->pdo->query("SELECT * FROM order");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entity\Models\OrderModel"); // retourne les valeurs en objet
        $orders = $query->fetchAll();
    }

    public function getOrder(Int $id)
    {
        $query = $this->pdo->query("SELECT * FROM order WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entity\Models\OrderModel"); // retourne les valeurs en objet
        $order = $query->fetchAll();
    }

    public function editOrderStatus(OrderModel $order, Int $id)
    {
        $query = $this->pdo->query("UPDATE order
        SET
        odr_status = :odr_status,
        odr_rating = :odr_rating
        WHERE id = $id
        ");
        $query->execute($order, $id);
    }

    public function createOrder(OrderModel $order)
    {
        if (!empty($item)) {
            $prepare = $this->pdo->prepare("INSERT INTO order (id, odr_status, odr_date, odr_rating, usr_id) VALUES (:id, :odr_status, :odr_date, :odr_rating, :usr_id");
            $prepare->execute($item);
        }
    }

    public function deleteOrder(int $id)
    {
        $query = $this->pdo->query("DELETE FROM order 
        WHERE id = $id");
        $query->execute();
    }
}
