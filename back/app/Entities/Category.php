<?php

namespace Entities;

class Category extends Entity
{
    private string $name;
    
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->id = $name;
    }
}
