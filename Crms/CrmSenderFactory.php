<?php

declare(strict_types=1);

namespace App\Crms;

use App\Crms\Enums\CrmNameEnum;
use InvalidArgumentException;

class CrmSenderFactory
{
    public static function createSender(CrmNameEnum $crmNameEnum, array $settings)
    {
        switch ($crmNameEnum->value) {
            case CrmNameEnum::BAZ->value:
                return new CrmSenderBaz($settings);
            // Добавьте другие реализации CrmSenderInterface, если необходимо
            default:
                throw new InvalidArgumentException('Не обслуживаемая CRM.');
        }
    }
}
