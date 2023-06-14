<?php

namespace App;

/**
 * Base DTO class
 */
class Entity
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
