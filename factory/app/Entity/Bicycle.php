<?php

namespace App\Entity;

class Bicycle implements VehicleInterface
{
    private float $costPerKm;
    private float $maxWeight;

    public function __construct(float $costPerKm = 0.0, float $maxWeight = 20.0)
    {
        $this->costPerKm = $costPerKm;
        $this->maxWeight = $maxWeight;
    }

    public function getCostPerKm(): float
    {
        return $this->costPerKm;
    }

    public function getMaxWeight(): float
    {
        return $this->maxWeight;
    }
}