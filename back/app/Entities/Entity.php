<?php

namespace Entities;

class Entity
{
    private string $id;

    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
}
