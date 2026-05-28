<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;

    public ?string $site_description;

    public ?string $support_email;

    public ?string $support_phone;

    public ?string $address;

    public static function group(): string
    {
        return 'general';
    }
}
