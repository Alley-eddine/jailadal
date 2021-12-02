<?php

namespace Entities\Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UserController
{
    public static function createUser()
    {
        //Créer un user sur la BD et les passés dans le body
        //TODO
    }

    public static function getAllUsers()
    {
        //Récuperer tout les users de la BD et les passés dans le body
        //TODO
    }

    public static function getUser()
    {
        //Récuperer un user de la BD et le passé dans le body
        //TODO
    }

    public static function editUser()
    {
        //Editer un user de la BD et le passé dans le body
        //TODO
    }

    public static function deleteUser()
    {
        //Supprimer un user de la BD
        //TODO  
        //$response = $this->db->prepare("DELETE FROM user WHERE usr_id=$id);
        //$response->bindParam($id, $args[$id]);
        //$response->execute();
        //$todos = $response->fetchAll();
        //return $this->response->withJson($todos);
    }
}
