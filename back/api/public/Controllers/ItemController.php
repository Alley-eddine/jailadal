<?php

namespace Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemController
{
    public static function createItem(Request $request, Response $response): Response
    {
        //TODO Créer un plat/menu sur la BD et les passés dans le body
        return $response;
    }

    public static function getAllItems(Request $request, Response $response): Response
    {
        //Récuperer tout les plats/menus de la BD et les passés dans le body
        return $response;
    }

    public static function getItem(Request $request, Response $response, $id): Response
    {
        //Récuperer un plat/menu de la BD et le passé dans le body
        return $response;
    }

    public static function editItem(Request $request, Response $response, $id): Response
    {
        //Editer un plat/menu de la BD et le passé dans le body
        return $response;
    }

    public static function deleteItem(Request $request, Response $response, $id): Response
    {
        //TODO Supprimer un plat/menu de la BD
        // (voir dans UserController)
        return $response;
    }
}
