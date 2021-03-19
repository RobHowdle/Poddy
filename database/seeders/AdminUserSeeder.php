<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $user = User::create([
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('password')
                ]);
                $role = Role::create(['name' => 'Admin']);

                $permissions = Permission::pluck('id','id')->all();

                $role->syncPermissions($permissions);

                $user->assignRole($role->name);
                }
    }
}