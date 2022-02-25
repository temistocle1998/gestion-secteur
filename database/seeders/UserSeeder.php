<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Ngagne Thioub', 'email' => 'ngagne.thioub@univ-thies.sn', 'role' => 'super-admin', 'password' => bcrypt('passer123')],
            ['name' => 'Khady Ndione', 'email' => 'khady.ndione@univ-thies.sn', 'role' => 'admin-agence', 'telephone'=>7745869256333, 'password' => bcrypt('passer123')],

        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
