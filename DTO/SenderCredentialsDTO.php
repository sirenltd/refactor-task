<?php
declare(strict_types=1);

namespace App\DTO;

readonly final class SenderCredentialsDTO
{
    public function __construct(public ?string $user,
                                public ?string $passwd)
    {
    }

}