<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['nom'=>'Tambacounda'],
            ['nom'=>'Dakar'],
            ['nom'=>'Saint louis'],
            ['nom'=>'Matam'],
            ['nom'=>'Thiès'],
            ['nom'=>'Kaolack'],
            ['nom'=>'Kolda'],
            ['nom'=>'Kedougou'],
            ['nom'=>'Ziguinchor'],
            ['nom'=>'Diourbel'],
            ['nom'=>'Fatick'],
            ['nom'=>'Louga'],
            ['nom'=>'Podor'],
        ];
     
        foreach($regions as $region){
            Region::create($region);
        }
    }
}
