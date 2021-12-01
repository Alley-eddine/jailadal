<?php

namespace Models;

class UserModel
{
    private string $stringExample;
    public function getStringExample(): string
    {
        return $this->stringExample;
    }
    public function setStringExample(string $stringExample): void
    {
        $this->stringExample = $stringExample;
    }

    private int $intExample;
    public function getIntExample(): int
    {
        return $this->intExample;
    }
    public function setIntExample(int $intExample): void
    {
        $this->intExample = $intExample;
    }

    public function __construct(string $stringExample, int $intExample)
    {
        $this->stringExample = $stringExample;
        $this->intExample = $intExample;
    }
}
