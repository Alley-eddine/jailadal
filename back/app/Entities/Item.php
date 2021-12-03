<?php

namespace Entities;

class Item extends Entity
{
    private string $itm_name;
    private string $itm_description;
    private float $itm_price;
    private string $itm_image;
    private int $itm_qty;
    private int $itm_original_qty;
    private string $cat_id;

    public function __construct(array $properties = null)
    {
        if ($properties != null)
        {
            foreach ($properties as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public function getName(): string
    {
        return $this->itm_name;
    }
    public function setName($name): void
    {
        $this->itm_name = $name;
    }

    public function getDescription(): string
    {
        return $this->itm_description;
    }
    public function setDescription($description): void
    {
        $this->itm_description = $description;
    }

    public function getPrice(): float
    {
        return $this->itm_price;
    }
    public function setPrice($price): void
    {
        $this->itm_price = $price;
    }

    public function getImage(): string
    {
        return $this->itm_image;
    }
    public function setImage($image): void
    {
        $this->itm_image = $image;
    }

    public function getQuantity(): int
    {
        return $this->itm_qty;
    }
    public function setQuantity($quantity): void
    {
        $this->itm_qty = $quantity;
    }

    public function getOriginalQuantity(): int
    {
        return $this->itm_original_qty;
    }
    public function setOriginalQuantity($originalQuantity): void
    {
        $this->itm_original_qty = $originalQuantity;
    }

    public function getCategoryId(): string
    {
        return $this->cat_id;
    }
    public function setCategoryId(string $categoryId): void
    {
        $this->cat_id = $categoryId;
    }
}
