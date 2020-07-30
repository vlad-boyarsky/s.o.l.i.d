<?php

namespace App\Packages;

use App\Order;

interface OrderPackageInterface
{
    public function isValid(Order $order): bool;
}