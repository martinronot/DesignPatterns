<?php

namespace App\Entity;

class Car implements VehicleInterface
{
    private float $costPerKm;
    private string $fuelType;
    private float $maxWeight;

    public function __construct(float $costPerKm, string $fuelType, float $maxWeight = 200.0)
    {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
        $this->maxWeight = $maxWeight;
    }

    public function getCostPerKm(): float
    {
        return $this->costPerKm;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getMaxWeight(): float
    {
        return $this->maxWeight;
    }
}