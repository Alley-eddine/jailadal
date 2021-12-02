<?php

namespace Entities\Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TableModel
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

    private bool $availability;
    public function get_Availability(): bool
    {
        return $this->availability;
    }
    public function set_Availability($availability): void
    {
        $this->availability = $availability;
    }

    public function __construct($id, $availability)
    {
        $this->id = $id;
        $this->availability = $availability;
    }

    public static function createTable()
    {
        //Créer une table sur la BD et les passés dans le body
        //TODO
    }

    public static function getAllTables()
    {
        //Récuperer toute les tables de la BD et les passés dans le body
        //TODO
    }

    public static function getTable()
    {
        //Récuperer une table de la BD et le passé dans le body
        //TODO
    }

    public static function editTable()
    {
        //Editer une table de la BD et le passé dans le body
        //TODO
    }

    public static function deleteTable()
    {
        //Supprimer une table de la BD
        //TODO  
        // (voir dans UserController)
    }
}
