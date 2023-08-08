<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'show applications']);
        Permission::create(['name' => 'create applications']);
        Permission::create(['name' => 'reply applications']);
        Permission::create(['name' => 'show my applications']);

        $roleManager = Role::create(['name'=>'manager']);

        $roleManager->givePermissionTo('show applications');
        $roleManager->givePermissionTo('reply applications');

        $roleUser = Role::create(['name'=>'user']);

        $roleUser->givePermissionTo('create applications');
        $roleUser->givePermissionTo('show my applications');
    
    }
}