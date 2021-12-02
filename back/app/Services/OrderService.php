<?php

namespace Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderService
{
    public function createOrder(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST Order</span>");
        return $response;
    }
    
    public function getAllOrders(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un OrderModel.
        // Appeler la méthode appropriée à la construction de OrderModel dans sa liste de méthodes.
        // Formater l"OrderModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Orders</span>");
        return $response;
    }
    
    public function getOrder(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET Order $id</span>");
        return $response;
    }
    
    public function editOrder(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT Order $id</span>");
        return $response;
    }
    
    public function deleteOrder(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE Order $id</span>");
        return $response;
    }
}
