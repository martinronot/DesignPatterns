<?php

interface QueryBuilder {
    public function select(array $fields): QueryBuilder;
    public function from(string $table): QueryBuilder;
    public function where(string $condition): QueryBuilder;
    public function limit(int $limit): QueryBuilder;
    public function getQuery(): string;
}
