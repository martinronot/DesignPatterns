<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use App\Factory\VehicleFactory;

# Essayer d'utiliser votre factory ici

// Création de la factory
$factory = new VehicleFactory();

// Test de la création simple par type
echo "Test de création par type :\n";
$bicycle = $factory->createVehicle('bicycle');
$car = $factory->createVehicle('car');
$truck = $factory->createVehicle('truck');

echo "Vélo - Coût par km : " . $bicycle->getCostPerKm() . "€\n";
echo "Voiture - Coût par km : " . $car->getCostPerKm() . "€\n";
echo "Camion - Coût par km : " . $truck->getCostPerKm() . "€\n\n";

// Test de la création intelligente selon distance et poids
echo "Test de création selon distance et poids :\n";

$scenarios = [
    ['distance' => 10, 'weight' => 10, 'description' => 'Court trajet, poids léger'],
    ['distance' => 30, 'weight' => 10, 'description' => 'Long trajet, poids léger'],
    ['distance' => 5, 'weight' => 50, 'description' => 'Court trajet, poids moyen'],
    ['distance' => 100, 'weight' => 300, 'description' => 'Long trajet, poids lourd']
];

foreach ($scenarios as $scenario) {
    $vehicle = $factory->createVehicleForJourney($scenario['distance'], $scenario['weight']);
    echo "{$scenario['description']} => " . get_class($vehicle) . "\n";
}