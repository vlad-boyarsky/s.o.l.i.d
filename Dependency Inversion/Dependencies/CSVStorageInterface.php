<?php

namespace App\Dependencies;

interface CSVStorageInterface
{
    public function store(string $name, string $data): string;

    public function get(string $name): string;

    public function delete(string $name): bool;
}