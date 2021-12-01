<?php
namespace Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class UserController{
    
    public static function createUser(Request $request, Response $response): Response {

        //Créer un user sur la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getAllUsers(Request $request, Response $response): Response {

        //Récuperer tout les users de la BD et les passés dans le body
        //TODO
        return $response;
    }

    public static function getUser(Request $request, Response $response, $id): Response {

        //Récuperer un user de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function editUser(Request $request, Response $response, $id): Response {

        //Editer un user de la BD et le passé dans le body
        //TODO
        return $response;
    }

    public static function deleteUser(Request $request, Response $response, $id): Response {

        //Supprimer un user de la BD
        //TODO  
        //$response = $this->db->prepare("DELETE FROM user WHERE usr_id=$id);
        //$response->bindParam($id, $args[$id]);
        //$response->execute();
        //$todos = $response->fetchAll();
        //return $this->response->withJson($todos);  
        return $response;
    }

}