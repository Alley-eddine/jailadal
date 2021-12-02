<?php

namespace Entities\Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CategoryService
{
    public function createCategory(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST Category</span>");
        return $response;
    }
    
    public function getAllCategories(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un CategoryModel.
        // Appeler la méthode appropriée à la construction de CategoryModel dans sa liste de méthodes.
        // Formater l"CategoryModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Categories</span>");
        return $response;
    }
    
    public function getCategory(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET Category $id</span>");
        return $response;
    }
    
    public function editCategory(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT Category $id</span>");
        return $response;
    }
    
    public function deleteCategory(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE Category $id</span>");
        return $response;
    }
}
