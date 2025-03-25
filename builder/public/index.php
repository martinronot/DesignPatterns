<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use App\MySQLQueryBuilder;

// Créer un QueryBuilder
$queryBuilder = new MySQLQueryBuilder();

// Écrire une requête en chaînant des méthodes
$query = $queryBuilder
    ->select(['name', 'email', 'age'])
    ->from('users')
    ->where('age >= 18')
    ->limit(10)
    ->getQuery();

// Afficher la requête
echo "Requête générée : " . $query . "\n";