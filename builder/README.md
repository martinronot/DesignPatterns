# Builder

## Objectif

Créer un Query Builder qui permet de construire des requêtes SQL de manière progressive et flexible. Le Query Builder devrait fournir des méthodes pour spécifier les différentes parties d'une requête SQL, telles que select(), from(), where(), etc.

## Étapes

- Créez une interface QueryBuilder qui représente le Query Builder. Cette classe devrait avoir des méthodes pour chaque partie d'une requête de base de donnée, telles que select(), from(), where(), etc.
- Créez une classe MySqlQueryBuilder qui implement QueryBuilder avec les methodes corespondant à MySql.
- Implémentez ces méthodes pour permettre aux utilisateurs de spécifier les parties de la requête de manière progressive.
- Testez votre implémentation en créant plusieurs requêtes SQL à l'aide du Query Builder et en vérifiant qu'elles sont construites correctement.

## Aller plus loin

- Créez un classe litteralBuilder qui écrit en français la requete (Je selectionne les champs ... de la table ... où ...)
