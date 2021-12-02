<?php

namespace Entities\Models;

use Common\Database;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UserModel
{
    private string $id;
    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    private string $lastname;
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    private string $firstname;
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    private string $mail;
    public function getMail(): string
    {
        return $this->mail;
    }
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    private string $phone;
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    private string $password;
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    private string $picture_url;
    public function getPicture_url(): string
    {
        return $this->picture_url;
    }
    public function setPicture_url($picture_url): void
    {
        $this->picture_url = $picture_url;
    }

    private bool $privilege;
    public function getPrivilege(): bool
    {
        return $this->privilege;
    }

    public function setPrivilege($privilege): void
    {
        $this->privilege = $privilege;
    }

    public function __construct($id, $lastname, $firstname, $mail, $phone, $password, $picture_url, $privilege)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->password = $password;
        $this->picture_url = $picture_url;
        $this->privilege = $privilege;
    }

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
