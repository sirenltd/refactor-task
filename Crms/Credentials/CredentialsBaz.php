<?php

declare(strict_types=1);

namespace App\Crms\Credentials;

class CredentialsBaz implements CredentialsInterface
{
    private string $user;
    private string $passwd;

    public function __construct(string $user, string $passwd)
    {
        $this->user = $user;
        $this->passwd = $passwd;
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
