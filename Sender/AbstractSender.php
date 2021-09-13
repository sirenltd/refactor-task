<?php

declare(strict_types=1);

namespace App\Sender;

abstract class AbstractSender implements SenderInterface
{
    protected array $settings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        $this->setSettings($settings);
    }


    public function setSettings(array $settings): void
    {
        $this->validateSettings($settings);
        $this->settings = $settings;
    }

    protected function validateSettings(array $settings): void
    {
        (new SettingsValidator($settings))->validate();
    }
}
