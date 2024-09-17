<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PopupSeeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //$this->call(PopupSeeder::class);
        User::create([
            // 'name' => 'Gedoni Ani',
            // 'email' => 'gedoniani@gmail.com',
            // 'password' => Hash::make('gedoniani@gmail.com'),
            // 'role' => 'trader',

            'name' => 'Admin',
            'email' => 'admin@fundingiqsignals.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',


        ]);
    }
}
