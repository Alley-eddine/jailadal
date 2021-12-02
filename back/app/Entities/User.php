<?php

namespace Entities;

class User
{
    private string $id;
    private string $usr_lastname;
    private string $usr_firstname;
    private string $usr_mail;
    private string $usr_phone;
    private string $usr_password;
    private string $usr_picture_url;
    private bool $usr_privilege;

    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getLastname(): string
    {
        return $this->usr_lastname;
    }
    public function setLastname($lastname): void
    {
        $this->usr_lastname = $lastname;
    }

    public function getFirstname(): string
    {
        return $this->usr_firstname;
    }
    public function setFirstname($firstname): void
    {
        $this->usr_firstname = $firstname;
    }

    public function getMail(): string
    {
        return $this->usr_mail;
    }
    public function setMail($mail): void
    {
        $this->usr_mail = $mail;
    }

    public function getPhone(): string
    {
        return $this->usr_phone;
    }
    public function setPhone($phone): void
    {
        $this->usr_phone = $phone;
    }

    public function getPassword(): string
    {
        return $this->usr_password;
    }
    public function setPassword($password): void
    {
        $this->usr_password = $password;
    }

    public function getPicture_url(): string
    {
        return $this->usr_picture_url;
    }
    public function setPicture_url($pictureUrl): void
    {
        $this->usr_picture_url = $pictureUrl;
    }

    public function getPrivilege(): bool
    {
        return $this->usr_privilege;
    }
    public function setPrivilege($privilege): void
    {
        $this->usr_privilege = $privilege;
    }
}
