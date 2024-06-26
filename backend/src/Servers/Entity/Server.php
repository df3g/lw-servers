<?php

namespace App\Servers\Entity;

use JsonSerializable;

final readonly class Server implements JsonSerializable
{
    public function __construct(
        private string $id,
        private string $model,
        private Ram $ram,
        private Hdd $hdd,
        private string $location,
        private Price $price){
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getRam(): Ram
    {
        return $this->ram;
    }

    public function getHdd(): Hdd
    {
        return $this->hdd;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }


    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'model' => $this->model,
            'ram' => $this->ram->toString(),
            'hdd' => $this->hdd->toString(),
            'location' => $this->location,
            'price' => $this->price->toString()
        ];
    }
}