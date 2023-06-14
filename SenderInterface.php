<?php

namespace App;

interface SenderInterface
{
    public function send(Entity $entity): int;
}
