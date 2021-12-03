<?php

namespace Entities;


Class Table {
    private string $id;
    private bool $availability;
    private string $usr_id;

    public function getId(): string
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function get_Availability(): bool
    {
        return $this->availability;
    }
    public function set_Availability($availability): void
    {
        $this->availability = $availability;
    }
}