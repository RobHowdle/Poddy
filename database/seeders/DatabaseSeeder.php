<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app(User::class)->create([
            'name' => 'Rob',
            'email' => 'r@r.r',
            'email_verified_at' => NOW(),
            'password' => bcrypt('password'),
            'is_host' => 1
        ]);

        \App\Models\User::factory(3)->create();
        \App\Models\Chapter::factory(4)->create();
        \App\Models\Episode::factory(237)->create();
        
    }
}