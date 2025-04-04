<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    private array $fields = [];
    private string $table = '';
    private array $conditions = [];
    private ?int $limit = null;

    public function select(array $fields): QueryBuilderInterface
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->table = $table;
        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->conditions[] = $condition;
        return $this;
    }

    public function limit(int $limit): QueryBuilderInterface
    {
        $this->limit = $limit;
        return $this;
    }

    public function getQuery(): string
    {
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