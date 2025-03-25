<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use App\Config;

// Récupérer la première instance
$config1 = Config::getInstance();
echo "API Key from config1: " . $config1->get('apiKey') . "\n";
echo "Database host from config1: " . $config1->get('db.host') . "\n\n";

// Récupérer une seconde instance
$config2 = Config::getInstance();
echo "API Key from config2: " . $config2->get('apiKey') . "\n";

// Vérifier que les deux instances sont identiques
echo "\nVérification du Singleton:\n";
echo "Les instances sont-elles identiques ? " . ($config1 === $config2 ? "Oui" : "Non") . "\n";