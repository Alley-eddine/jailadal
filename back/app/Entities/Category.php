<?php

namespace Entities;

class Category extends Entity
{
    private string $cat_name;
    
    public function getName(): string
    {
        return $this->cat_name;
    }
    public function setName($name): void
    {
        $this->cat_name = $name;
    }
}
