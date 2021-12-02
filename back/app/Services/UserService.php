<?php

namespace Entities\Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UserService
{
    public function createUser(Request $request, Response $response): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>POST User</span>");
        return $response;
    }
    
    public function getAllUsers(Request $request, Response $response): Response
    {
        // TODO:
        // Instancier un UserModel.
        // Appeler la méthode appropriée à la construction de UserModel dans sa liste de méthodes.
        // Formater l"UserModel en JSON.
        // Ajouter le JSON au body de $response.

        $response->getBody()->write("<span>GET All Users</span>");
        return $response;
    }
    
    public function getUser(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>GET User $id</span>");
        return $response;
    }
    
    public function editUser(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>PUT User $id</span>");
        return $response;
    }
    
    public function deleteUser(Request $request, Response $response, string $id): Response
    {
        // TODO: Implémentation de la logique
        $response->getBody()->write("<span>DELETE User $id</span>");
        return $response;
    }
}
