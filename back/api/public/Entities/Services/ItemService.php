<?php

namespace Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemService
{
    public function getAllItems(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un ItemModel.
        // Appeler la méthode appropriée à la construction de ItemModel dans sa liste de méthodes.
        // Formater l'ItemModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write('<span>GET All Items</span>');
        return $response;
    }
}
