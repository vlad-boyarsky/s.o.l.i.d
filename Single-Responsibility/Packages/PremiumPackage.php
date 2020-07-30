<?php

namespace App\Packages;

use App\Order;

include_once 'Packages/OrderPackageInterface.php';

class PremiumPackage implements OrderPackageInterface
{

    public function isValid(Order $order): bool
    {
        return $order->getPrice() > 2000;
    }

}