<?php

namespace App\Crms;

use App\Crms\SendDataToCrm\SendDataToCrmInterface;

interface CrmSenderInterface
{
    //да и по хорошему на настройки тоже надо бы создать отдельный интерфейс
    public function __construct(array $settings);

    public function setCredentials(array $settings): void;

    public function send(SendDataToCrmInterface $data): bool;
}
