<?php

namespace Entities\Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemModel
{
    public static function createItem()
    {
        //TODO Créer un plat/menu sur la BD et les passés dans le body
    }

    public static function getAllItems()
    {
        //Récuperer tout les plats/menus de la BD et les passés dans le body
    }

    public static function getItem()
    {
        //Récuperer un plat/menu de la BD et le passé dans le body
    }

    public static function editItem()
    {
        //Editer un plat/menu de la BD et le passé dans le body
    }

    public static function deleteItem()
    {
        //TODO Supprimer un plat/menu de la BD
        // (voir dans UserController)
    }
}
