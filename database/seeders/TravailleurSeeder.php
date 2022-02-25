<?php

namespace Database\Seeders;

use App\Models\Probleme;
use App\Models\Travailleur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravailleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['prenom' => 'ngone', 'nom'=>'seck', 'sexe'=>'femme', 'adresse'=>'rue 10', 'age'=>25,  'telephone'=>7745869256333, 'profession' => 'agriculteur', 'agent_id'=> 1, 'secteur_id'=>1, 'descriptif'=>'manque de financement'],
            ['prenom' => 'khadim', 'nom'=>'lo', 'sexe'=>'homme', 'age'=>48,'adresse'=>'quartier pont',  'telephone'=>7745869256333, 'profession' => 'agriculteur', 'agent_id'=> 1, 'secteur_id'=>1, 'descriptif'=>'manque de financement'],
            ['prenom' => 'Moustapha', 'nom'=>'diallo', 'sexe'=>'homme', 'age'=>34, 'adresse'=>'rroute de base', 'telephone'=>7745869256333, 'profession' => 'artisan', 'agent_id'=> 2, 'secteur_id'=>4, 'descriptif'=>'manque de financement'],
            ['prenom' => 'mbayeng', 'nom'=>'dakhaté', 'sexe'=>'homme', 'age'=>29, 'adresse'=>'marché ocaase',  'telephone'=>7745869256333, 'profession' => 'agriculteur', 'agent_id'=> 2, 'secteur_id'=>1, 'descriptif'=>'manque de financement'],
        ];

        foreach($users as $user){
            $data = new Travailleur();
            $probleme = new Probleme();

            $data->prenom = $user['prenom'];
            $data->nom = $user['nom'];

            $data->profession  = $user['profession'];
            $data->sexe  = $user['sexe'];
            $data->telephone  = $user['telephone'];
            $data->secteur_id  = $user['secteur_id'];
            $data->adresse  = $user['adresse'];
            $data->age  = $user['age'];
            $probleme->descriptif = $user['descriptif'];
            $data->agent_id = $user['agent_id'];

            $data->save();
            $data->problemes()->save($probleme);
        }
    }
}
