<?php

declare(strict_types=1);

namespace App\Sender;

/**
 * Class SenderInterface
 * @package App\Sender
 */
interface SenderInterface
{
    /**
     * @param array $data
     */
    public function send(array $data);
}