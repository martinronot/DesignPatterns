<?php

require_once 'QueryBuilder.php';

class LiteralBuilder implements QueryBuilder {
    private array $fields = [];
    private string $table = '';
    private array $conditions = [];
    private ?int $limit = null;

    public function select(array $fields): QueryBuilder {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): QueryBuilder {
        $this->table = $table;
        return $this;
    }

    public function where(string $condition): QueryBuilder {
        $this->conditions[] = $condition;
        return $this;
    }

    public function limit(int $limit): QueryBuilder {
        $this->limit = $limit;
        return $this;
    }

    public function getQuery(): string {
        $query = "Je sélectionne " . ($this->fields ? implode(', ', $this->fields) : 'tous les champs');
        $query .= " de la table " . $this->table;
        
        if (!empty($this->conditions)) {
            $query .= " où " . implode(' et ', $this->conditions);
        }

        if ($this->limit !== null) {
            $query .= " avec une limite de " . $this->limit . " résultats";
        }

        return $query . ".";
    }
}
