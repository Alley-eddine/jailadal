<?php

namespace Entities;

class Cart extends Entity
{
    private string $usr_id;

    public function getUsrId(): string
    {
        return $this->usr_id;
    }
    public function setUsrId($usr_id): void
    {
        $this->usr_id = $usr_id;
    }
}
