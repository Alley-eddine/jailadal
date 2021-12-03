<?php

namespace Models;

use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CategoryModel extends DefaultModel
{
    protected $table = "category";
    public function editOrderStatus(array $entity)
    {
        $query = $this->pdo->query("UPDATE order
        SET
        odr_status = :odr_status,
        odr_rating = :odr_rating
        WHERE id = :id
        ");
        return $this->save($query, $entity);
    }

    public function createCategory(array $entity)
    {
        $uuid = $this->newUuid();
        if (!empty($entity)) {
            $query = $this->pdo->prepare("INSERT INTO categories (id, cat_name) VALUES ($uuid, :cat_name)");
            return $this->save($query, $entity);
        }
    }
}