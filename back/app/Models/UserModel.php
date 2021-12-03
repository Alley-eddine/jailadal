<?php

namespace Models;

use Models\DefaultModel;

class UserModel extends DefaultModel
{
    protected $table = "user";

    public function createUser(array $entity)
    {
        $uuid = $this->newUuid();
    
        $query = "INSERT INTO user
        (id, usr_lastname, usr_firstname, usr_mail, usr_phone, usr_password, usr_picture_url, usr_privilege)
        VALUES ($uuid, :id, :usr_lastname, :usr_firstname, :usr_mail, :usr_phone, usr_password, usr_picture_url, usr_privilege)
        ";

        return $this->save($query, $entity);
    }

    public function editUser(array $entity)
    {
        $query = "UPDATE user
        SET
        usr_lastname = :usr_lastname,
        usr_fisrtname = :usr_fisrtname,
        usr_mail = :usr_mail,
        usr_phone = :usr_phone,
        usr_password = :usr_password,
        usr_picture_url = :usr_picture_url,
        usr_privilege = :usr_privilege
        WHERE id = :id";
        return $this->save($query, $entity);
    }
}
