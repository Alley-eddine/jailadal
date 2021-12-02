<?php

namespace Entities\Models;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemModel
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

    private string $name;
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }

    private string $description;
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setItmDescription($description): void
    {
        $this->description = $description;
    }

    private float $price;
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    private string $image;
    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage($image): void
    {
        $this->image = $image;
    }

    private int $quantity;
    public function getQuantity(): int
    {
        return $this->qty;
    }
    public function setQuantity($qty): void
    {
        $this->qty = $qty;
    }

    private int $originalQuantity;
    public function getOriginalQuantity(): int
    {
        return $this->originalQuantity;
    }
    public function setItmOriginalQuantity($originalQuantity): void
    {
        $this->originalQuantity = $originalQuantity;
    }

    public function __construct($id, $name, $description, $price, $image, $quantity, $originalQuantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->quantity = $quantity;
        $this->originalQuantity = $originalQuantity;
    }

    public static function createItem()
    {
        //TODO Créer un plat/menu sur la BD et les passés dans le body
    }

    public static function getAllItems()
    {
        //Récuperer tout les plats/menus de la BD et les passés dans le body
    }

    public static function getItem()
    {
        //Récuperer un plat/menu de la BD et le passé dans le body
    }

    public static function editItem()
    {
        //Editer un plat/menu de la BD et le passé dans le body
    }

    public static function deleteItem()
    {
        //TODO Supprimer un plat/menu de la BD
        // (voir dans UserController)
    }
}
