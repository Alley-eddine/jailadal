<?php

namespace Models;

use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TableModel extends DefaultModel
{


    public function getTable(Int $id)
    {
        //Récuperer une table de la BD et le passé dans le body
        $query = $this->pdo->query("SELECT * FROM `table` WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entities\Models\TableModel"); // retourne les valeurs en objet
        $table = $query->fetchAll();
    }

    public function createTable(ItemModel $table)
    {
        if (!empty($table)) {
            $prepare = $this->pdo->prepare("INSERT INTO `table` (id, tbl_availability, usr_id) VALUES (:id, :tbl_availability, :usr_id)");
            $prepare->execute($table);
        }
    }

    public function getAllTables()
    {
        //Récuperer tout les plats/menus de la BD et les passés dans le body
        $query = $this->pdo->query("SELECT * FROM `table`");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entities\Models\TableModel"); // retourne les valeurs en objet
        $tables = $query->fetchAll();
    }

    public function editTable(TableModel $table, $id)
    {
        $query = $this->pdo->query("UPDATE `table`
        SET
        tbl_availability = :tbl_availability,
        usr_id = :usr_id, 
        WHERE id = $id");
        $query->execute($table, $id);
    }

    public function deleteTable(int $id)
    {
        $query = $this->pdo->query("DELETE FROM `table` 
        WHERE id = $id");
        $query->execute($id);
    }
}
