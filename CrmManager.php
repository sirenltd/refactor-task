<?php

declare(strict_types=1);

namespace App;

use App\Crms\CrmSenderFactory;
use App\Crms\CrmSenderInterface;
use App\Crms\Enums\CrmNameEnum;
use App\Crms\SendDataToCrm\SendDataToCrmInterface;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private CrmSenderInterface $client;

    public function __construct(CrmNameEnum $crmNameEnum, array $settings)
    {
        $this->client = CrmSenderFactory::createSender($crmNameEnum, $settings);
    }

    public function sendToCrm(SendDataToCrmInterface $data)
    {
        return $this->client->send($data);
    }
}
