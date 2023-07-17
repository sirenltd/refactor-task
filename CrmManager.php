<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
final class CrmManager
{
    private SenderInterface $client;
    private array $settings;

    public function __construct(array $settings)
    {
        $this->validateSettings($settings);
        $this->settings = $settings;
        $this->client = SenderFactory::createSender(SenderNameEnum::BAZ);
    }

    /**
     * Sends the person to a crm
     */
    public function sendPersonToCrm(array $clientEntity): int
    {
        $this->client->setCredentials(Credentials::create($this->settings['user'], $this->settings['passwd']));

        return $this->client->send($clientEntity);
    }

    // it would be better to move this check to the separate class
    private function validateSettings(array $settings): void
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
    }
}
