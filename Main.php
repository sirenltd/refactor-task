<?php

declare(strict_types=1);

namespace App;

class Main
{
    function main() {
        $bazSender = new BazSender(['user'=>'user','passwd'=>'passwd']);
        $crmManager = new CrmManager($bazSender);
        $crmManager->sendPerson(['Data of Person to Send']);
    }
}
