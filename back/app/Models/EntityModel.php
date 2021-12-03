<?php

namespace Models;

use Common\Database;
use Entities\Entity;
use Exception;
use PDO;

class EntityModel
{
    private $class;
    protected Database $db;
    protected $table;

    public function __construct()
    {
        $this->db = new Database;
        $this->class = "Entities\\" . ucfirst($this->table);
    }

    protected function validityCheck(Entity $entity): void
    {
        if ($entity == null || empty($entity)) {
            throw new Exception();
        }
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

    public function getAll()
    {
        $table = $this->table;
        $query = $this->db->getPDO()->query("SELECT * FROM $table");
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);

        return $query->fetchAll();
    }

    public function get(string $id)
    {
        $table = $this->table;
        $query = $this->db->getPDO()->query("SELECT * FROM $table WHERE id=\"$id\"");
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        
        return $query->fetch();
    }

    protected function save(string $query)
    {
        $prepare = $this->db->getPDO()->prepare($query);

        return $prepare->execute();
    }

    public function delete(string $id): void
    {
        $table = $this->table;
        $query = $this->db->getPDO()->query("DELETE FROM $table WHERE id = \"$id\"");
        $query->execute();
    }
}
