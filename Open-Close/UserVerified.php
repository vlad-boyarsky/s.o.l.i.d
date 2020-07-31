<?php

class UserVerified implements VerifiedInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function isAllow(string $context): bool
    {
        switch ($context) {
            case ReportController::class:
                return !$this->user->isManager();
                break;
        }

        return false;
    }
}