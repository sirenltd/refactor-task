<?php
declare(strict_types=1);

namespace App\Sender;

use InvalidArgumentException;

/**
 * Class BazSender
 * @package App\Sender
 */
class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int
     */
    public function send(array $data) : int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }

    /**
     * @param array $credentials
     * @return void
     */
    protected function validateCredentials(array $credentials) {
        if (empty($credentials['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($credentials['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
    }
}
