<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
    
        $writeGallery = Permission::create(['name' => 'upload-files', 'guard-name' => 'web']);

        $adminRole->syncPermissions([
            $writeGallery,
        ]);

        $user = User::findOrFail(1)->assignRole('Admin');
    }
}