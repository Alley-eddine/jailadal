<?php

namespace Models;

use DateTime;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class OrderModel
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

    private int $status;
    public function getStatus(): int
    {
        return $this->status;
    }
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    private DateTime $date;
    public function getDate(): DateTime
    {
        return $this->date;
    }
    public function setDate($date): void
    {
        $this->date = $date;
    }

    private int $rating;
    public function getRating(): int
    {
        return $this->rating;
    }
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    public function __construct($id, $status, $date, $rating)
    {
        $this->id = $id;
        $this->status = $status;
        $this->date = $date;
        $this->rating = $rating;
    }

    public static function createOrder()
    {
        //Créer une commande sur la BD et les passés dans le body
        //TODO
    }

    public static function getAllOrders()
    {
        //Récuperer toute les commande de la BD et les passés dans le body
        //TODO
    }

    public static function getOrder()
    {
        //Récuperer une commande de la BD et le passé dans le body
        //TODO
    }

    public static function editOrder()
    {
        //Editer une commande de la BD et le passé dans le body
        //TODO
    }

    public static function deleteOrder()
    {
        //Supprimer une commande de la BD
        //TODO  
        // (voir dans UserController)
    }
}
