<?php

namespace App;

use App\RequestClient\OnExecutionInterface;
use App\RequestClient\OnPendingListenerInterface;

class RequestClient
{
    public function execute(OnResultListenerInterface $listener)
    {
        if($listener instanceof OnPendingListenerInterface){

        }

        if($listener instanceof OnExecutionInterface){

        }
    }
}