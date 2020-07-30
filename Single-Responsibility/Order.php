<?php

namespace App;

use App\Packages\OrderPackageInterface;


class Order
{
    private int $price;
    private $package;

    public function __construct(OrderPackageInterface $package)
    {
        $this->package = $package;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}