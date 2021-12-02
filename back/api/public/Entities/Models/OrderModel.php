<?php

namespace Entities\Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderController
{
    public static function createOrder()
    {
        //Créer une commande sur la BD et les passés dans le body
        //TODO
    }

    public static function getAllOrders()
    {
        //Récuperer toute les commande de la BD et les passés dans le body
        //TODO
    }

    public static function getOrder()
    {
        //Récuperer une commande de la BD et le passé dans le body
        //TODO
    }

    public static function editOrder()
    {
        //Editer une commande de la BD et le passé dans le body
        //TODO
    }

    public static function deleteOrder()
    {
        //Supprimer une commande de la BD
        //TODO  
        // (voir dans UserController)
    }
}
