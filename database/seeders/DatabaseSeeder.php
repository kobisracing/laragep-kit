<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ShieldSeeder::class,
            RoleSeeder::class,
        ]);

        $superadmin = User::firstOrCreate(
            ['email' => 'laragep@mail.com'],
            [
                'name' => 'Laragep',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
        );

        $superadmin->syncRoles('super_admin');
    }
}
