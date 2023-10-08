<?php

namespace App;

class CredentialsDto
{
    protected string $user;
    protected string $password;
    public function __construct(string $user, string $password)
    {
        if ($user == '') {
            throw new InvalidArgumentException('User must be set!');
        }

        if ($password == '') {
            throw new InvalidArgumentException('Password must be set!');
        }

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