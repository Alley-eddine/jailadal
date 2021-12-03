<?php

namespace Models;

use Entities\Item;
use Models\DefaultModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemModel extends DefaultModel
{
    protected $table = "item";

    public function createItem(array $entity)
    {
        $uuid = $this->newUuid();

        //TODO Créer un article sur la BD
        if (!empty($item)) {
            $query = $this->pdo->prepare("INSERT INTO item (id, itm_name, itm_description, itm_price, itm_image,  itm_qty, itm_original_qty) VALUES (:$uuid, :itm_name, :itm_description, :itm_price, :itm_image, :itm_qty, :itm_original_qty, :cat_id");
            return $this->save($query, $entity);
        }
    }

    public function editItem(array $entity)
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
        WHERE id = :id
        ");
        return $this->save($query, $entity);
    }
}
