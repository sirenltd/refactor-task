<?php

namespace App\Sender;

use App\Sender\Exception\SettingsValidateException;
use App\ValidatorInterface;

class SettingsValidator implements ValidatorInterface
{

    private array $settings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function validate(): void
    {
        if (empty($this->settings['user'])) {
            throw new SettingsValidateException('User must be set!');
        }

        if (empty($this->settings['passwd'])) {
            throw new SettingsValidateException('Password must be set!');
        }
    }

}
