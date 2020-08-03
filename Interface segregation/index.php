<?php

use App\RequestClient;

$requestClient = new RequestClient('https://facebook.com');

$requestClient->execute(new class implements \App\OnResultListenerInterface, \App\OnPendingListenerInterface {

    public function onSuccess(\App\Response $response)
    {
        $response->getMessageSuccess();
    }

    public function onFailure(\App\Exception $exception)
    {
        $exception->getMessageError();
    }

    public function onPending()
    {
        echo "Wait...";
    }

});