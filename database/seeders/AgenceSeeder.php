<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agences = [
            ['nom'=>'antenne regional Tambacounda','region_id'=>1],
            ['nom'=>'antenne regional Dakar', 'region_id'=>2],
            ['nom'=>'antenne regional Saint louis', 'region_id'=>3],
            ['nom'=>'antenne regional Matam', 'region_id'=>4],
            ['nom'=>'antenne regional Thiès', 'region_id'=>5],
            ['nom'=>'antenne regional Kaolack', 'region_id'=>6],
            ['nom'=>'antenne regional Kolda', 'region_id'=>7],
            ['nom'=>'antenne regional Kedougou', 'region_id'=>8],
            ['nom'=>'antenne regional Ziguinchor', 'region_id'=>9],
            ['nom'=>'antenne regional Diourbel', 'region_id'=>10],
            ['nom'=>'antenne regional Fatick', 'region_id'=>11],
            ['nom'=>'antenne regional Louga', 'region_id'=>12],
            ['nom'=>'antenne regional Podor', 'region_id'=>13],
        ];
     
        foreach($agences as $agence){
            Agence::create($agence);
        }
    }
}
