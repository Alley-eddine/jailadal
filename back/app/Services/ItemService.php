<?php

namespace Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemService
{
    public function createItem(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST Item</span>");
        return $response;
    }
    
    public function getAllItems(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un ItemModel.
        // Appeler la méthode appropriée à la construction de ItemModel dans sa liste de méthodes.
        // Formater l"ItemModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Items</span>");
        return $response;
    }
    
    public function getItem(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET Item $id</span>");
        return $response;
    }
    
    public function editItem(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT Item $id</span>");
        return $response;
    }
    
    public function deleteItem(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE Item $id</span>");
        return $response;
    }
}
