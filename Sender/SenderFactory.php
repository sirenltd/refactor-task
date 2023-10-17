<?php

declare(strict_types=1);

namespace App\Sender;

use InvalidArgumentException;

/**
 * Class SenderFactory
 * @package App\Sender
 */
class SenderFactory
{
    /**
     * @var string
     */
    const BAZ_TYPE = "BAZ";

    /**
     * @param string $senderType
     * @param array $credentials
     * @return SenderInterface
     */
    public static function createSender(string $senderType, array $credentials): SenderInterface
    {
        switch ($senderType) {
            case self::BAZ_TYPE:
                return new BazSender($credentials);
            default:
                throw new InvalidArgumentException(sprintf('Not supported sender type: %s', $senderType));
        }
    }
}