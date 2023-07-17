<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

final class SenderFactory
{
    public static function createSender(SenderNameEnum $senderName): SenderInterface
    {
        switch ($senderName->value) {
            case SenderNameEnum::BAZ->value:
                return new BazSender();
            default:
                throw new InvalidArgumentException(sprintf('The client: %s is not supported', $senderName));
        }
    }
}