<?php

namespace Models;

use DateTime;
use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderModel extends DefaultModel
{
    protected $table = "order";
    
    public function editOrderStatus(array $entity)
    {
        $query = $this->pdo->query("UPDATE order
        SET
        odr_status = :odr_status,
        odr_rating = :odr_rating,
        WHERE id = :id");
        return $this->save($query, $entity);
    }

    public function createOrder(array $entity)
    {
        $uuid = $this->newUuid();

        if (!empty($item)) {
            $query = $this->pdo->prepare("INSERT INTO order (id, odr_status, odr_date, odr_rating, usr_id) VALUES (:$uuid, :odr_status, :odr_date, :odr_rating, :usr_id");
            return $this->save($query, $entity);
        }
    }
}