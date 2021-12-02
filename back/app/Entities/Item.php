<?php

namespace Entities;

Class Item{
    private string $id;
    private string $name;
    private string $description;
    private float $price;
    private string $image;
    private int $quantity;
    private int $originalQuantity;
    private String $categoryId;

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
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function setItmDescription($description): void
    {
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getOriginalQuantity(): int
    {
        return $this->originalQuantity;
    }
    public function setOriginalQuantity($originalQuantity): void
    {
        $this->originalQuantity = $originalQuantity;
    }

    public function __construct($id, $name, $description, $price, $image, $quantity, $originalQuantity, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->quantity = $quantity;
        $this->originalQuantity = $originalQuantity;
        $this->categoryId = $categoryId;
    }
}