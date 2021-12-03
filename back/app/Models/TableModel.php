<?php

namespace Models;

use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TableModel extends DefaultModel
{
    protected $table = "table";

    public function createTable(array $entity)
    {
        $uuid = $this->newUuid();

        $query = $this->pdo->query("INSERT INTO table
        (id,
        tbl_availability,
        usr_id)
        VALUES
        ($uuid,
        :tbl_availability,
        :usr_id)");
        return $this->save($query, $entity);

    }

    public function editTable(array $entity)
    {
        $query = $this->pdo->query("UPDATE table
        SET
        tbl_availability = :tbl_availability,
        usr_id = :usr_id, 
        WHERE id = :id");
        return $this->save($query, $entity);
    }
}
