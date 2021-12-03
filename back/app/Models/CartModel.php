<?php

namespace Models;


use Models\DefaultModel;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CartModel extends DefaultModel
{
    protected $table = "cart";

    public function createCart(array $entity)
    {
        $uuid = $this->newUuid();
        if (!empty($entity)) {
            $query = $this->pdo->prepare("INSERT INTO cart (id, usr_id) VALUES ($uuid, :usr_id)");
            return $this->save($query, $entity);
        }
    }
}
