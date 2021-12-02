<?php

namespace Entities\Models;

use Common\Database;

class UserModel
{
    private Database $db;

    private string $id;
    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    private string $lastname;
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    private string $firstname;
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    private string $mail;
    public function getMail(): string
    {
        return $this->mail;
    }
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    private string $phone;
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    private string $password;
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    private string $picture_url;
    public function getPicture_url(): string
    {
        return $this->picture_url;
    }
    public function setPicture_url($picture_url): void
    {
        $this->picture_url = $picture_url;
    }

    private bool $privilege;
    public function getPrivilege(): bool
    {
        return $this->privilege;
    }

    public function setPrivilege($privilege): void
    {
        $this->privilege = $privilege;
    }

    public function __construct()
    {
        $this->db = new Database;
    }

    public function fetch(): self
    {
        return $this;
    }

    public function persist(): void
    {

    }
}
