<?php

namespace Models;

use Entities\User;
use Models\EntityModel;

class UserModel extends EntityModel
{
    protected $table = "user";

    public function createUser(User $user)
    {
        $this->validityCheck($user);

        $uuid = $this->newUuid();
        $query = $this->pdo->prepare(
            "INSERT INTO user
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

    public function modifyUser(User $user, string $id)
    {
        $this->validityCheck($user);

        $query = $this->pdo->query(
            "UPDATE user
            SET
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
