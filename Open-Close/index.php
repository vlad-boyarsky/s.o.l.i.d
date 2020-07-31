<?php

$ip = '10.20.30.221';

$verified = new IpVerified($ip);

$user = new User();

$controller = new ReportController($verified);

if ($controller->preExecute()) {
    $controller->indexAction();
}