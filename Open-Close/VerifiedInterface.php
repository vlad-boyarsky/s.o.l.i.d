<?php


interface VerifiedInterface
{
    public function isAllow(string $context) : bool;
}