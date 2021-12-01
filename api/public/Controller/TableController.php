<?php
namespace Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TableController{
    
    public static function createTable(Request $request, Response $response): Response {

        //Créer une table sur la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getAllTables(Request $request, Response $response): Response {

        //Récuperer toute les tables de la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getTable(Request $request, Response $response, $id): Response {

        //Récuperer une table de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function editTable(Request $request, Response $response, $id): Response {

        //Editer une table de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function deleteTable(Request $request, Response $response, $id): Response {

        //Supprimer une table de la BD
        //TODO  
        //$response = $this->db->prepare("DELETE FROM user WHERE usr_id=$id);  
        return $response;
    }
}