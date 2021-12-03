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
        $name = $category->getName();

        $query = $this->pdo->prepare(
            "INSERT INTO categories
            (
                id,
                cat_name
            )
            VALUES
            (
                $uuid,
                $name
            )"
        );
        return $this->save($query);
    }

    public function modifyCategory(Category $category, string $id)
    {
        $this->validityCheck($category);

        $name = $category->getName();

        $query = $this->pdo->query(
            "UPDATE categories
            SET
            cat_name = $name 
            WHERE
            id = $id"
        );

        return $this->save($query);
    }
}
