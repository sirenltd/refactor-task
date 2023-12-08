<?php

declare(strict_types=1);

namespace App\Modules\CRM;

interface CrmManagerInterface
{
    public function send(array $data): int;
}