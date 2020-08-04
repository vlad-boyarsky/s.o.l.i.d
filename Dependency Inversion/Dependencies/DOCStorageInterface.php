<?php

namespace App\Dependencies;

interface DOCStorageInterface
{
    public function get(string $name): string;

    public function revisionStore(string $name, string $data): bool;
}