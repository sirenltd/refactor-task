<?php

declare(strict_types=1);

require "vendor/autoload.php";

use App\Crm\CrmManager;
use App\Sender\BazSender;
use App\Dto\CredentialsDto;

$credentialsDto = new CredentialsDto(
    'test',
    'test'
);

$crmManager = new CrmManager(
    new BazSender($credentialsDto)
);

$send = $crmManager->sendPerson(['name' => 'test']);

var_dump($send);