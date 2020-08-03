<?php

namespace App;

interface OnResultListenerInterface
{
    public function onSuccess(Response $response);

    public function onFailure(Exception $exception);
}