<?php

namespace Entities\Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CartService
{
    public function createCart(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST Cart</span>");
        return $response;
    }
    
    public function getAllCarts(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un CartModel.
        // Appeler la méthode appropriée à la construction de CartModel dans sa liste de méthodes.
        // Formater l"CartModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Carts</span>");
        return $response;
    }
    
    public function getCart(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET Cart $id</span>");
        return $response;
    }
    
    public function editCart(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT Cart $id</span>");
        return $response;
    }
    
    public function deleteCart(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE Cart $id</span>");
        return $response;
    }
}
