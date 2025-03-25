<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface
{
    public function select(array $fields): QueryBuilderInterface;
    public function from(string $table): QueryBuilderInterface;
    public function where(string $condition): QueryBuilderInterface;
    public function limit(int $limit): QueryBuilderInterface;
    public function getQuery(): string;
}