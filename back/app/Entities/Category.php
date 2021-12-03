<?php
namespace Entities;

Class Category{
    private string $id;
    private string $name;

    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->id = $name;
    }
}