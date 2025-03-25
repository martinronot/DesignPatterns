<?php

namespace App\Factory;

use App\Entity\VehicleInterface;
use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehicleFactory
{
    public function createVehicle(string $type): VehicleInterface
    {
        return match ($type) {
            'bicycle' => new Bicycle(),
            'car' => new Car(0.15, 'essence'),
            'truck' => new Truck(0.25, 'diesel'),
            default => throw new \InvalidArgumentException("Type de véhicule inconnu : {$type}")
        };
    }

    public function createVehicleForJourney(float $distance, float $weight): VehicleInterface
    {
        if ($weight > 200) {
            return new Truck(0.25, 'diesel');
        }
        
        if ($weight > 20 || $distance > 20) {
            return new Car(0.15, 'essence');
        }
        
        return new Bicycle();
    }
}
