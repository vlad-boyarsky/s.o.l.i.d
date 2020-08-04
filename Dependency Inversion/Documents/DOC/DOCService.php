<?php

namespace  App\Documents\DOC;

use App\Dependencies\DOCStorageInterface;
use App\Vendor\SpecialStorage;

class DOCService
{
    /**
     * @var SpecialStorage
     */
    private $storage;
    /**
     * @var DOCSerialization
     */
    private $serialization;

    public function __construct(DOCStorageInterface $storage, DOCSerialization $serialization)
    {

        $this->storage = $storage;
        $this->serialization = $serialization;
    }

    public function store(DOCDocument $document): bool
    {
        $data = $this->serialization->serialize($document);

        return $this->storage->revisionStore($document->getName(), $data);
    }

    public function get(string $name): DOCDocument
    {
        $data = $this->storage->get($name);

        return $this->serialization->deserialize($name, $data);
    }

    public function delete(DOCDocument $document): bool
    {
        return $this->storage->delete($document->getName());
    }
}