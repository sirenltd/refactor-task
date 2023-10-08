<?php

namespace App;

class CredentialsDto
{
    protected string $user;
    protected string $password;
    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function getUser(): string {
        return $this->user;
    }

    public function getPassword(): string {
        return $this->password;
    }
}