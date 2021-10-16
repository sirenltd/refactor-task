<?php

declare(strict_types=1);

namespace App;

abstract class SenderDecorator implements SenderInterface
{
    protected array $settings;

    public function __construct($settings)
    {
        $this->setSettings($settings);
    }

    private function setSettings(array $settings): void
    {
        $this->validateSettings($settings);
        $this->settings = $settings;
    }

    abstract protected function validateSettings(array $settings): void;
}
