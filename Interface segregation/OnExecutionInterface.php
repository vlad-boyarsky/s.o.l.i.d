<?php

namespace App;

interface OnExecutionInterface
{
    public function onPreExecution();

    public function onPostExecution();
}