<?php

namespace Entities;


class Table extends Entity
{
    private bool $tbl_availability;
    private string $usr_id;

    public function get_Availability(): bool
    {
        return $this->tbl_availability;
    }
    public function set_Availability($availability): void
    {
        $this->tbl_availability = $availability;
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
