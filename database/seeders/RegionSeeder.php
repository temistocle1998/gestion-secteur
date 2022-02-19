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
        $villes = [
            ['nom'=>'Tambacoundaa'],
            ['nom'=>'DAKAR'],
        ];
     
        foreach($villes as $ville){
            Region::create($ville);
        }
    }
}
