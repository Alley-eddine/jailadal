<?php

namespace Models;

use Models\DefaultModel;

class UserModel extends DefaultModel
{
    protected $table = "user";

    public function create(array $entity)
    {
        $uuid = $this->newUuid();
    
        $query = "INSERT INTO user
        (id, test1, test2, test3, test4, test5)
        VALUES ($uuid, :test1Value, :test2Value, :test3Value, :test4Value, :test5Value)
        ";

        return $this->save($query, $entity);
    }

    public function edit(array $entity)
    {
        // TODO: retourner le bon query
        $query = "";
        return $this->save($query, $entity);
    }
}
