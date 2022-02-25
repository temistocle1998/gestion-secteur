<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Secteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secteurs = [
            ['nom'=>'agriculture',  'region_id'=>1],
            ['nom'=>'pisciculture',  'region_id'=>2],
            ['nom'=>'pêche', 'region_id'=>2],
            ['nom'=>'artisanat',  'region_id'=>1],
            ['nom'=>'aviculture', 'region_id'=>1],
        ];

        foreach($secteurs as $secteur){
            $data = new Secteur();
            $data_client = new Region();

            $data->nom = $secteur['nom'];

            $data_client->id = $secteur['region_id'];


            $data->save();
            // $data_client->secteur_id = $data->id;

            $data->regions()->attach($data_client);
        }
    }
}
