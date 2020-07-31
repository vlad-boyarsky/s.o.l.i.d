<?php

class IpVerified implements VerifiedInterface
{
    private $ip;

    public function __construct(string $ip)
    {
        $this->ip = $ip;
    }

    public function isAllow(string $context): bool
    {
        if ($_SERVER['REMOTE_ADDR'] !== $this->ip) {
            return false;
        }

        return true;
    }
}