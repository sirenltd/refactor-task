<?php

declare(strict_types=1);

namespace App\Crms;

use App\Crms\Credentials\CredentialsBaz;
use App\Crms\Credentials\CredentialsInterface;
use App\Crms\SendDataToCrm\SendDataToCrmInterface;
use InvalidArgumentException;

class CrmSenderBaz implements CrmSenderInterface
{
    private CredentialsInterface $credentials;

    public function __construct(array $settings)
    {
        $this->setCredentials($settings);
    }

    public function setCredentials(array $settings): void
    {
        $this->checkCredentials();

        $this->credentials = new CredentialsBaz($settings['user'], $settings['passwd']);
    }

    public function send(SendDataToCrmInterface $data): bool
    {
        // Логика отправки данных в систему CRM Baz
        // ...
        // Вернуть статус успешной отправки
        return true;
    }

    private function checkCredentials(): void
    {
         //вообще по хорошему это надо вынести до того как создается CrmManager
        if (!isset($this->settings['user'], $this->settings['passwd'])) {
            throw new InvalidArgumentException('Отсутствуют учетные данные');
        }
    }
}
