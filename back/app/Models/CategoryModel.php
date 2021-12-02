<?php

namespace Models;

use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class CategoryModel extends DefaultModel
{
    public static function createCategorie()
    {
        //TODO Créer une catégorie sur la BD et les passés dans le body
    }

    public function getAllOrders()
    {
        $query = $this->pdo->query("SELECT * FROM order");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entity\Models\OrderModel"); // retourne les valeurs en objet
        $orders = $query->fetchAll();
    }

    public function getOrder(Int $id)
    {
        $query = $this->pdo->query("SELECT * FROM order WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entity\Models\OrderModel"); // retourne les valeurs en objet
        $order = $query->fetchAll();
    }

    public function editOrderStatus(Int $id)
    {
        $query = $this->pdo->query("UPDATE order
        SET
        odr_status = :odr_status,
        odr_rating = :odr_rating
        WHERE id = $id
        ");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entities\ItemModel");
        $article = $query->fetch();

    }

    public function createCategory(CategoryModel $category)
    {
        if (!empty($item)) {
            $prepare = $this->pdo->prepare("INSERT INTO categories (id, cat_name) VALUES (:id, :cat_name)");
            $prepare->execute($category);
        }
    }

    public function deleteCategory(int $id)
    {
        $query = $this->pdo->query("DELETE FROM categories
        WHERE id = $id
        ");
        $query->execute();
    }
}