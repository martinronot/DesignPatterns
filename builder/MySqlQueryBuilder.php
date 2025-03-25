<?php

require_once 'QueryBuilder.php';

class MySqlQueryBuilder implements QueryBuilder {
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
        $query = "SELECT " . ($this->fields ? implode(', ', $this->fields) : '*');
        $query .= " FROM " . $this->table;
        
        if (!empty($this->conditions)) {
            $query .= " WHERE " . implode(' AND ', $this->conditions);
        }

        if ($this->limit !== null) {
            $query .= " LIMIT " . $this->limit;
        }

        return $query . ";";
    }
}
