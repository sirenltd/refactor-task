<?php

declare(strict_types=1);

namespace App;

use App\Sender\Sender;
use App\Sender\SenderInterface;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    /**
     * @var SenderInterface
     */
    private SenderInterface $sender;

    /**
     * @param Sender $sender
     */
    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param array $personEntity
     * @return int
     */
    public function sendPerson(array $personEntity): int
    {
        return $this->sender->send($personEntity);
    }
}
