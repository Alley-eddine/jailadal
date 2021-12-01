<?php

namespace Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderController
{
    public static function createOrder(Request $request, Response $response): Response
    {
        //Créer une commande sur la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getAllOrders(Request $request, Response $response): Response
    {
        //Récuperer toute les commande de la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getOrder(Request $request, Response $response, $id): Response
    {
        //Récuperer une commande de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function editOrder(Request $request, Response $response, $id): Response
    {
        //Editer une commande de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function deleteOrder(Request $request, Response $response, $id): Response
    {
        //Supprimer une commande de la BD
        //TODO  
        // (voir dans UserController)
        return $response;
    }
}
