<?php

namespace Entities;

use DateTime;

class Order extends Entity
{
    private int $odr_status;
    private DateTime $odr_date;
    private int $odr_rating;
    private string $usr_id;

    public function getStatus(): int
    {
        return $this->odr_status;
    }
    public function setStatus($status): void
    {
        $this->odr_status = $status;
    }

    public function getDate(): DateTime
    {
        return $this->odr_date;
    }
    public function setDate($date): void
    {
        $this->odr_date = $date;
    }

    public function getRating(): int
    {
        return $this->odr_rating;
    }
    public function setRating($rating): void
    {
        $this->odr_rating = $rating;
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
