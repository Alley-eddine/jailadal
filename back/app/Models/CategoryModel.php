<?php

namespace Models;

use Entities\Category;
use Models\EntityModel;

class CategoryModel extends EntityModel
{
    protected $table = "category";

    public function createCategory(Category $category)
    {
        $this->validityCheck($category);

        $uuid = $this->newUuid();
        $query = $this->pdo->prepare(
            "INSERT INTO category
            (
                id
            )
            VALUES
            (
                $uuid,
            )"
        );

        return $this->save($query);
    }

    public function modifyCategory(Category $category, string $id)
    {
        $this->validityCheck($category);

        $query = $this->pdo->query(
            "UPDATE category
            SET
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
