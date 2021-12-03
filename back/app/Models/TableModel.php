<?php

namespace Models;

use Entities\Table;
use Models\EntityModel;

class TableModel extends EntityModel
{
    protected $table = "table";

    public function createTable(Table $table)
    {
        $this->validityCheck($table);

        $uuid = $this->newUuid();
        $query = $this->pdo->prepare(
            "INSERT INTO table
            (
                id
            )
            VALUES
            (
                $uuid,
            )"
        );

        return $this->save($query);
    }

    public function modifyTable(Table $table, string $id)
    {
<<<<<<< Updated upstream
        $query = $this->pdo->query("UPDATE table
        SET
        tbl_availability = :tbl_availability,
        usr_id = :usr_id, 
        WHERE id = :id");
        return $this->save($query, $entity);
=======
        $this->validityCheck($table);

        $query = $this->pdo->query(
            "UPDATE table
            SET
            WHERE
            id = $id"
        );

        return $this->save($query);
>>>>>>> Stashed changes
    }
}
