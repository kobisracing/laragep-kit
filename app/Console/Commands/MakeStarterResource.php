<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('laragep:resource {name : The model name (e.g. Post, Blog/Post)}
                              {--S|simple : Simple resource with modals, no separate pages}
                              {--soft-deletes : Add soft delete support}
                              {--G|generate : Auto-generate form/table from DB columns}')]
#[Description('Generate a Filament resource with laragep-kit conventions (view page, Shield-ready, admin panel)')]
class MakeStarterResource extends Command
{
    public function handle(): int
    {
        $name = $this->argument('name');

        $args = [
            'model' => $name,
            '--panel' => 'admin',
            '--view' => true,
            '--no-interaction' => true,
        ];

        if ($this->option('simple')) {
            $args['--simple'] = true;
        }

        if ($this->option('soft-deletes')) {
            $args['--soft-deletes'] = true;
        }

        if ($this->option('generate')) {
            $args['--generate'] = true;
        }

        $exitCode = $this->call('make:filament-resource', array_filter($args, fn ($v) => $v !== false));

        if ($exitCode === self::SUCCESS) {
            $this->call('shield:generate', [
                '--all' => true,
                '--panel' => 'admin',
                '--no-interaction' => true,
            ]);

            $this->call('db:seed', [
                '--class' => 'RoleSeeder',
                '--no-interaction' => true,
            ]);

            $this->call('permission:cache-reset');

            $this->components->info("Resource [{$name}] created with Shield permissions synced.");
        }

        return $exitCode;
    }
}
