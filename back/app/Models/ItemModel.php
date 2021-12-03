<?php

namespace Models;

use Entities\Item;
use Models\EntityModel;

class ItemModel extends EntityModel
{
    protected $table = "item";

    public function createItem(Item $item)
    {
        $this->validityCheck($item);

        $uuid = $this->newUuid();

        $name = $item->getName();
        $description = $item->getDescription();
        $price = $item->getPrice();
        $image = $item->getImage();
        $quantity = $item->getQuantity();
        $originalQuantity = $item->getOriginalQuantity();
        $categoryId = $item->getCategoryId();

        $query =
            "INSERT INTO item
            (
                id,
                itm_name,
                itm_description,
                itm_price, itm_image, 
                itm_qty,
                itm_original_qty,
                cat_id
            )
            VALUES
            (
                \"$uuid\",
                \"$name\",
                \"$description\",
                $price,
                \"$image\",
                $quantity,
                $originalQuantity,
                \"$categoryId\"
            )";

        return $this->save($query);
    }

    public function modifyItem(Item $item, string $id)
    {
        $this->validityCheck($item);

        $name = $item->getName();
        $description = $item->getDescription();
        $price = $item->getPrice();
        $image = $item->getImage();
        $quantity = $item->getQuantity();
        $originalQuantity = $item->getOriginalQuantity();
        $categoryId = $item->getCategoryId();

        $query =
            "UPDATE item
            SET
            itm_name = \"$name\", 
            itm_description = \"$description\", 
            itm_price = $price, 
            itm_image = \"$image\",  
            itm_qty = $quantity, 
            itm_original_qty = $originalQuantity,
            cat_id = \"$categoryId\"
            WHERE
            id = \"$id\"";

        return $this->save($query);
    }
}
