<?php

namespace Entities;

Class Cart{
    private string $id;
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}