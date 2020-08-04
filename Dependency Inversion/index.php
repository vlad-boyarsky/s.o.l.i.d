<?php

$storage = new \App\Vendor\SpecialStorage();
$serialization = new \App\CSVSerialization();

$service = new \App\CSVService($storage, $serialization);

$document = new \App\CSVDocument();

$service->store($document);
