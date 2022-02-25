<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Soce ndiaye', 'email' => 'soce@soce.sn', 'role' => 'admin', 'telephone'=>7745869256333, 'password' => bcrypt('passer123'), 'agence_id'=> 1],
            ['name' => 'Ousmane Ndiaye', 'email' => 'ousmane.ndiaye@univ-thies.sn', 'role' => 'admin-agence', 'telephone'=>7745869256333, 'password' => bcrypt('passer123'),'agence_id'=> 5],
        ];

        foreach($users as $user){
            $data = new User();
            $agent = new Agent();

            $data->name = $user['name'];
            $data->email = $user['email'];

            $data->role  = $user['role'];
            $data->password  = $user['password'];
            $agent->agence_id = $user['agence_id'];

            $data->save();
            $data->agents()->save($agent);
        }
    }
}
