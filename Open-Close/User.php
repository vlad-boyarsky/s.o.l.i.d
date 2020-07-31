<?php

class User
{
    const TYPE_ADMIN = 'admin';
    const TYPE_MANAGER = 'manager';
    const TYPE_USER = 'user';

    private $role;

    public function isAdmin(): bool
    {
        return $this->role == self::TYPE_ADMIN;
    }

    public function isManager(): bool
    {
        return $this->role == self::TYPE_MANAGER;
    }

    public function isUser(): bool
    {
        return $this->role == self::TYPE_USER;
    }
}