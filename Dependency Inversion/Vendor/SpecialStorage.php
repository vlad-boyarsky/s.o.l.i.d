<?php

namespace App\Vendor;

use App\Dependencies\CSVStorageInterface;
use App\Dependencies\DOCStorageInterface;

class SpecialStorage implements CSVStorageInterface, DOCStorageInterface
{

    public function store(string $name, string $data): string
    {
        // TODO: Implement store() method.
    }

    public function get(string $name): string
    {
        // TODO: Implement get() method.
    }

    public function delete(string $name): bool
    {
        // TODO: Implement delete() method.
    }

    public function revisionStore(string $name, string $data): bool
    {
        // TODO: Implement revisionStore() method.
    }
}