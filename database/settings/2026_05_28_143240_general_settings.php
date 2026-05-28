<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', config('app.name'));
        $this->migrator->add('general.site_description', null);
        $this->migrator->add('general.support_email', null);
        $this->migrator->add('general.support_phone', null);
        $this->migrator->add('general.address', null);
    }

    public function down(): void
    {
        $this->migrator->delete('general.site_name');
        $this->migrator->delete('general.site_description');
        $this->migrator->delete('general.support_email');
        $this->migrator->delete('general.support_phone');
        $this->migrator->delete('general.address');
    }
};
