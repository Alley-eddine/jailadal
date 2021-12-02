<?php

namespace Models;

use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemModel extends DefaultModel
{

    public function getCategory(): string
    {
        return $this->category;
    }
    public function setCategory(string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function createItem(ItemModel $item)
    {
        //TODO Créer un article sur la BD
        if (!empty($item)) {
            $prepare = $this->pdo->prepare("INSERT INTO item (itm_id, itm_name, itm_description, itm_price, itm_image,  itm_qty, itm_original_qty) VALUES (:itm_id, :itm_name, :itm_description, :itm_price, :itm_image, :itm_qty, :itm_original_qty, :cat_id");
            $prepare->execute($item);
        }
    }

    public function getAllItems()
    {
        //Récuperer tout les plats/menus de la BD et les passés dans le body
        $query = $this->pdo->query("SELECT * FROM items");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entities\Models\ItemModel"); // retourne les valeurs en objet
        $items = $query->fetchAll();
    }

    public function getItem(Int $id)
    {
        $query = $this->pdo->query("SELECT * FROM items WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "\Entities\Models\ItemModel"); // retourne les valeurs en objet
        $item = $query->fetchAll();
    }

    public function editItem(ItemModel $item, Int $id)
    {
        //Editer un plat/menu de la BD et le passé dans le body
        $query = $this->pdo->query("UPDATE items
        SET
        itm_name = :itm_name, 
        itm_description = :itm_name, 
        itm_price = :itm_price, 
        itm_image = :itm_image,  
        itm_qty = :itm_qty, 
        itm_original_qty = :itm_original,
        cat_id = :cat_id
        WHERE id = $id
        ");
        $query->execute($id);
    }

    public function deleteItem(int $id)
    {
        $query = $this->pdo->query("DELETE FROM items 
        WHERE id = $id
        ");
        $query->execute($id);
    }
}
