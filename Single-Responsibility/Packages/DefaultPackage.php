<?php

namespace App\Packages;

use App\Order;

include_once 'Packages/OrderPackageInterface.php';

class DefaultPackage implements OrderPackageInterface
{

    public function isValid(Order $order): bool
    {
        return $order->getPrice() > 1000 && $order->getPrice() < 2000;
    }

}