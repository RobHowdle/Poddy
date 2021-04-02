<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Chapter;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesAndPermissionsSeeder;

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
            'email' => 'rob@rob.rob',
            'email_verified_at' => NOW(),
            'password' => bcrypt('password'),
            'is_host' => 1
        ]);
        app(User::class)->create([
            'name' => 'Aaron',
            'email' => 'aaron@aaron.aaron',
            'email_verified_at' => NOW(),
            'password' => bcrypt('password'),
            'is_host' => 1
        ]);
        app(User::class)->create([
            'name' => 'Hayley',
            'email' => 'hayley@hayley.hayley',
            'email_verified_at' => NOW(),
            'password' => bcrypt('password'),
            'is_host' => 1
        ]);
        app(User::class)->create([
            'name' => 'Flex',
            'email' => 'flex@flex.flex',
            'email_verified_at' => NOW(),
            'password' => bcrypt('password'),
            'is_host' => 1
        ]);

        app(Chapter::class)->create([
            'name' => 'Original Chapter',
            'user_id' => '1',
            'description' => 'The Original Chapter of UK Ghost Stories',
            'logo_path' => '/originalchapter.png',
            'logo_thin_path' =>'/orithin.png',
        ]);
        app(Chapter::class)->create([
            'name' => 'Irish Chapter',
            'user_id' => '2',
            'description' => 'The Irish Chapter of UK Ghost Stories',
            'logo_path' => '/irishchapter.png',
            'logo_thin_path' =>'/irithin.png',
        ]);
        app(Chapter::class)->create([
            'name' => 'Liverpool Chapter',
            'user_id' => '3',
            'description' => 'The Liverpool Chapter of UK Ghost Stories',
            'logo_path' => '/liverpoolchapter.png',
            'logo_thin_path' =>'/livthin.png',
        ]);
        app(Chapter::class)->create([
            'name' => 'Cumbria Chapter',
            'user_id' => '4',
            'description' => 'The Cumbria Chapter of UK Ghost Stories',
            'logo_path' => '/cumbriachapter.png',
            'logo_thin_path' =>'/cumthin.png',
        ]);

        \App\Models\User::factory(10)->create();
        // \App\Models\Chapter::factory(4)->create();
        \App\Models\Episode::factory(100)->create();
        
        $this->call([
            RolesAndPermissionsSeeder::class
        ]);
    }
}