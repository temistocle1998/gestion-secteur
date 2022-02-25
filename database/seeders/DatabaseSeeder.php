<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RegionSeeder::class);
        $this->call(AgenceSeeder::class);
        $this->call(AgentSeeder::class);
        $this->call(SecteurSeeder::class);
        $this->call(TravailleurSeeder::class);
        $this->call(UserSeeder::class);
    }
}
