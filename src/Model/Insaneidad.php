<?php

namespace App\Model;

class Insaneidad
{
    public function __construct
    (
        private int $id,
        private string $name,
        private string $type,
        private string $status,
        private int $edad,
    ) {

    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getStatus(): string
    {
        return $this->status;
    }
    public function getEdad(): int
    {
        return $this->edad;
    }
}
