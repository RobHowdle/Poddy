<?php

namespace Database\Seeders;

use App\Models\User;
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
    
        $createChapter = Permission::create(['name' => 'create-chapter']);
        $editChapter = Permission::create(['name' => 'edit-chapter']);
        $deleteChapter = Permission::create(['name' => 'delete-chapter']);
        $writeGallery = Permission::create(['name' => 'upload-files']);

        $adminRole->syncPermissions([
            $createChapter,
            $editChapter,
            $deleteChapter,
            $writeGallery,
        ]);

        $user = User::findOrFail(1)->assignRole('Admin');
    }
}