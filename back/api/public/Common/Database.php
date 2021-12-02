<?php
namespace Common;

use Config\ConfigDb;
use PDO;
use PDOException;

Class Database{

    protected $pdo;

    public function __construct()
    {

        $this->pdo = new \PDO(
            "mysql:host=".ConfigDb::CONFIG['host'].";dbname=".ConfigDb::CONFIG['dbname'], 
            ConfigDb::CONFIG['user'], 
            ConfigDb::CONFIG['pwd'],
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public function getPDO():PDO
    {
        return $this->pdo;
    }
}