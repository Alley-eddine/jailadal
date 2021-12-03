<?php

namespace Entities;

use DateTime;

class Order extends Entity
{
    private int $status;
    private DateTime $date;
    private int $rating;
    private string $usr_id;

    public function getStatus(): int
    {
        return $this->status;
    }
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }
    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function getRating(): int
    {
        return $this->rating;
    }
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    public function getUsrId(): string
    {
        return $this->usr_id;
    }
    public function setUsrId($usr_id): void
    {
        $this->usr_id = $usr_id;
    }
}
