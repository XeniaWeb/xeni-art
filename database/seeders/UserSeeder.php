<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAdminUser();
        $this->createEditorUser();
        $this->createCustomerUser();
    }

    public function createAdminUser(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }

    public function createEditorUser(): void
    {
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }

    public function createCustomerUser(): void
    {
        User::create([
            'name' => 'Customer User',
            'email' => 'customer@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
