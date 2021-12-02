<?php

namespace Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TableService
{
    public function createTable(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST Table</span>");
        return $response;
    }
    
    public function getAllTables(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un TableModel.
        // Appeler la méthode appropriée à la construction de TableModel dans sa liste de méthodes.
        // Formater l"TableModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Tables</span>");
        return $response;
    }
    
    public function getTable(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET Table $id</span>");
        return $response;
    }
    
    public function editTable(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT Table $id</span>");
        return $response;
    }
    
    public function deleteTable(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE Table $id</span>");
        return $response;
    }
}
