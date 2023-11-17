<?php
declare(strict_types=1);

namespace App;

use App\Entity\Client as ClientEntity;

interface SenderInterface
{
    public function send(ClientEntity $data): int;
}