<?php

namespace Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CategoryModel
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

    private string $name;
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->id = $name;
    }



    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function createCategorie()
    {
        //TODO Créer une catégorie sur la BD et les passés dans le body
    }

    public static function getAllCategorie()
    {
        //Récuperer toutes les catégories de la BD et les passés dans le body
    }

    public static function getItem()
    {
        //Récuperer une catégorie de la BD et le passé dans le body
    }

    public static function editItem()
    {
        //Editer une catégorie de la BD et le passé dans le body
    }

    public static function deleteItem()
    {
        //TODO Supprimer une catégorie de la BD
        // (voir dans UserController)
    }
}
