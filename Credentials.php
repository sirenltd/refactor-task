<?php

declare(strict_types=1);

namespace App;

final class Credentials
{
    private string $user;
    private string $passwd;

    private function __construct(string $user, string $passwd)
    {
        $this->user = $user;
        $this->passwd = $passwd;
    }

    public static function create(string $user, string $passwd): self
    {
        return new self($user, $passwd);
    }

    public function getPasswd(): string
    {
        return $this->passwd;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}