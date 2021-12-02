<?php

namespace Models;

use Common\Database;
use PDO;

class DefaultModel
{
    private Database $db;
    private $entity;
    protected $table;

    public function __construct()
    {
        $this->db = new Database;
        $this->entity = "back\app\Entities\\".ucfirst($this->table);
    }

    public function findAll()
    {
        $query = $this->db->getPDO()->query("SELECT * FROM $this->table");
        $query->setFetchMode(PDO::FETCH_CLASS, $this->entity);

        return $query->fetchAll();
    }

    public function find(string $id)
    {
        $query = $this->db->getPDO()->query("SELECT * FROM $this->table WHERE id=$id");
        $query->setFetchMode(PDO::FETCH_CLASS, $this->entity);

        return $query->fetch();
    }

    public function delete(string $id): void
    {
        //TODO: delete en database l'entité
    }

    protected function newUuid(): string
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    protected function save(string $query, array $entity)
    {
        $prepare = $this->db->getPDO()->prepare($query);

        return $prepare->execute($entity);
    }
}
