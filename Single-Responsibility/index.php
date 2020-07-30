<?php

namespace App;

use App\Packages\DefaultPackage;
use App\Packages\PremiumPackage;

require_once 'Packages/DefaultPackage.php';
require_once 'Packages/PremiumPackage.php';
require_once 'Order.php';

$price = 001;

$packagePremium = new PremiumPackage();
$packageDefault = new DefaultPackage();

$order = new Order($packageDefault);
$order->setPrice($price);

$isValidDefault = $packageDefault->isValid($order);
$isValidPremium = $packagePremium->isValid($order);

function selectedPackage($isValidDefault, $isValidPremium)
{
    if ($isValidDefault) {
        echo "<p style='color: green'>Selected Package Default > 1000</p>";
    }else if($isValidPremium){
        echo "<p style='color: gold'>Selected Package Premium > 2000</p>";
    }else{
        echo "<p style='color: red'>Not Correct Package</p>";
    }
}

selectedPackage($isValidDefault, $isValidPremium);