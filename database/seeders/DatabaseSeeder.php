<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoryMasterSeeder::class);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$OtLputWxIZpdsi5JjXHBs.jLJiX1wzeVcycTWIap/eB794oQUkGeO'
        ]);
    }
}
