<?php

namespace Models;

use Entities\Cart;
use Models\EntityModel;

class CartModel extends EntityModel
{
    protected $table = "cart";

    public function createCart(Cart $cart)
    {
        $this->validityCheck($cart);

        $uuid = $this->newUuid();
        $query = $this->pdo->prepare(
            "INSERT INTO cart
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

    public function modifyCart(Cart $cart, string $id)
    {
        $this->validityCheck($cart);

        $query = $this->pdo->query(
            "UPDATE cart
            SET
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
