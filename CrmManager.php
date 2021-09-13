<?php

declare(strict_types=1);

namespace App;

use App\Sender\SenderInterface;

/**
 * Class CrmManager
 *
 * @package App
 */
class CrmManager
{
    private SenderInterface $sender;

    public function __construct(SenderInterface $sender) // Get $sender from Dependency Provider
    {
        $this->sender = $sender;
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->sender->send($clientEntity);
    }
}
