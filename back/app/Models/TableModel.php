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
        $availability = $table->get_Availability();
        $usr_id = $table->getUsrId();

        $query = $this->pdo->prepare(
            "INSERT INTO table
            (
                id,
                tbl_availability,
                usr_id
            )
            VALUES
            (
                $uuid,
                $availability,
                $usr_id
            )"
        );
        return $this->save($query);
    }

    public function modifyTable(Table $table, string $id)
    {
        $this->validityCheck($table);

        $availability = $table->get_Availability();
        $usr_id = $table->getUsrId();
        $availability = $table->get_Availability();
        $usr_id = $table->getUsrId();

        $query = $this->pdo->query(
            "UPDATE table
            SET
            tbl_availability = $availability, 
            usr_id = $usr_id, 
            WHERE
            id = $id"
        );
        return $this->save($query);
    }
}
