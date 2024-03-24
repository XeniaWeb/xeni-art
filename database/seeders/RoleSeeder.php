<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $this->createAdminRole();
        $this->createEditorRole();
        $this->createCustomerRole();
    }

    protected function createRole(RoleName $role, Collection $permissions): void
    {
        $newRole = Role::create(['name' => $role->value]);
        $newRole->permissions()->sync($permissions);
    }

    protected function createAdminRole(): void
    {
        $permissions = Permission::query()
            ->where('name', 'like', 'user.%')
            ->orWhere('name', 'like', 'work.%')
            ->orWhere('name', 'like', 'post.%')
            ->pluck('id');

        $this->createRole(RoleName::ADMIN, $permissions);
    }

    protected function createEditorRole(): void
    {
        $permissions = Permission::query()
            ->where('name', 'like', 'post.%')
            ->orWhere('name', 'like', 'work.%')
            ->orWhere('name', 'like', 'employer.%')
            ->orWhere('name', 'like', 'vacancy.%')
            ->pluck('id');

        $this->createRole(RoleName::EDITOR, $permissions);
    }

    protected function createCustomerRole(): void
    {
        $permissions = Permission::query()
            ->orWhere('name', 'like', 'post.%')
            ->where('name', 'like', 'employer.%')
            ->orWhere('name', 'like', 'vacancy.%')
            ->pluck('id');

        $this->createRole(RoleName::CUSTOMER, $permissions);
    }
}
