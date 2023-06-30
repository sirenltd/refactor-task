<?php
namespace App\Interfaces\Client;

interface ClientInterface
{
    public function setCredentials(array $credentional);
    public function getCredentials(): array;
    public function send(array $data): int;
}