<?php

class ReportController
{
    private $verified;

    public function __construct(VerifiedInterface $verified)
    {
        $this->verified = $verified;
    }

    public function preExecute(): bool
    {
        return $this->verified->isAllow(ReportController::class) === true;
    }

    public function indexAction()
    {

    }
}