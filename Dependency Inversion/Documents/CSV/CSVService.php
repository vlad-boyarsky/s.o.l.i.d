<?php

namespace  App\Documents\CSV;

use App\Dependencies\CSVStorageInterface;
use App\Vendor\SpecialStorage;

class CSVService
{
    /**
     * @var SpecialStorage
     */
    private $storage;
    /**
     * @var CSVSerialization
     */
    private $serialization;

    public function __construct(CSVStorageInterface $storage, CSVSerialization $serialization)
    {

        $this->storage = $storage;
        $this->serialization = $serialization;
    }

    public function store(CSVDocument $document): bool
    {
        $data = $this->serialization->serialize($document);

        return $this->storage->store($document->getName(), $data);
    }

    public function get(string $name): CSVDocument
    {
        $data = $this->storage->get($name);

        return $this->serialization->deserialize($name, $data);
    }

    public function delete(CSVDocument $document): bool
    {
        return $this->storage->delete($document->getName());
    }
}