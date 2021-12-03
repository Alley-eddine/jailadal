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
        $usr_id = $cart->getUsrId();

        $query = $this->pdo->prepare(
            "INSERT INTO cart
            (
                id,
                usr_id
            )
            VALUES
            (
                $uuid,
                $usr_id
            )"
        );
        return $this->save($query);
    }

    public function modifyCart(Cart $cart, string $id)
    {
        $this->validityCheck($cart);

        $usr_id = $cart->getUsrId();

        $query = $this->pdo->query(
            "UPDATE cart
            SET
            usr_id = $usr_id
            WHERE
            id = $id"
        );
        return $this->save($query);
    }
}