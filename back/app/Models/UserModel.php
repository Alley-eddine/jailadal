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
        $lastname = $user->getLastname();
        $firstname = $user->getFirstname();
        $mail = $user->getMail();
        $phone = $user->getPhone();
        $password = $user->getPassword();
        $picture_url = $user->getPicture_url();
        $privilege = $user->getPrivilege();
        
        $query = $this->pdo->prepare(
            "INSERT INTO user
            (
                id,
                usr_lastname,
                usr_firstname,
                usr_mail,
                usr_phone,
                usr_password,
                usr_picture_url,
                usr_privilege
            )
            VALUES
            (
                $uuid,
                $lastname,
                $firstname,
                $mail,
                $phone,
                $password,
                $picture_url,
                $privilege
            )"
        );

        return $this->save($query);
    }

    public function modifyUser(User $user, string $id)
    {
        $this->validityCheck($user);

        $lastname = $user->getLastname();
        $firstname = $user->getFirstname();
        $mail = $user->getMail();
        $phone = $user->getPhone();
        $password = $user->getPassword();
        $picture_url = $user->getPicture_url();
        $privilege = $user->getPrivilege();

        $query = $this->pdo->query(
            "UPDATE user
            SET
            usr_lastlastname = $lastname, 
            usr_firstname = $firstname, 
            usr_mail = $mail, 
            usr_phone = $phone,  
            usr_qty = $password, 
            usr_original_qty = $picture_url,
            cat_id = $privilege
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
