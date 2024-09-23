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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin_me@yopmail.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user_me@yopmail.com',
            'role' => 'user',
        ]);

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager_role@yopmail.com',
            'role' => 'manager',
        ]);

    }
}
