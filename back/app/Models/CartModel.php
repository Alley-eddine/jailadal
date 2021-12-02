<?php

namespace Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CartModel extends DefaultModel
{
    public static function createCart()
    {
        //TODO Créer un panier sur la BD et les passés dans le body
    }

    public static function getCart()
    {
        //Récuperer un panier de la BD et le passé dans le body
    }

    public static function editCart()
    {
        //Editer un panier de la BD et le passé dans le body
    }

    public static function deleteCart()
    {
        //TODO Supprimer un panier de la BD
        // (voir dans UserController)
    }
}
