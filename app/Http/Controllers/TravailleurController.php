<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Agent;
use App\Models\Probleme;
use App\Models\Secteur;
use App\Models\Travailleur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TravailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idAgence = Agent::with('agences')->where('user_id', Auth::user()->id);

        $idAgence = $idAgence->get()->map(function ($idAgence)
        {
            return [
                'idAgence'=>$idAgence->agence_id
            ];
        });

        $nomAgence = Agence::find($idAgence);

        //$travailleurs = Travailleur::with('secteurs')->get();

        $travailleurs = DB::table('travailleurs')->join('secteurs', 'secteurs.id', '=', 'travailleurs.secteur_id')->select('travailleurs.id','travailleurs.prenom', 'travailleurs.nom', 'travailleurs.age', 'travailleurs.sexe', 'travailleurs.telephone', 'travailleurs.adresse', 'travailleurs.profession','secteurs.nom as snom')->get();
        return view('travailleurs.index', compact('travailleurs', 'nomAgence'));
    }

    public function create(Travailleur $travailleur)
    {
        $idAgence = Agent::with('agences')->where('user_id', Auth::user()->id);

        $idAgence = $idAgence->get()->map(function ($idAgence)
        {
            return [
                'idAgence'=>$idAgence->agence_id
            ];
        });

        $nomAgence = Agence::find($idAgence);
        $travailleurs = Travailleur::all();
        $secteurs = Secteur::all();
        return view('travailleurs.create', compact('travailleur', 'nomAgence', 'secteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'telephone' => 'required|string',
            'age' => 'required|string',
            'sexe' => 'required|string',
            'secteur_id' => 'required|string',
            'profession' => 'required|string',
            'adresse' => 'required|string',
        ]);

        $probleme = new Probleme();


        $probleme->descriptif = $request->get('descriptif');

        $datas = DB::table('agents')->select('id')->where('user_id', '=', Auth::user()->id)->get();

        foreach ($datas as $agent) {
            # code...
        }
        $created = Travailleur::create(array_merge(
            $data->validated(),
            ['agent_id' => $agent->id]
        ));

        $created->problemes()->save($probleme);

        return redirect('/travailleurs/create')->with('message', 'Merci pour ces precieuses informations');
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Travailleur  $travailleur
     * @return \Illuminate\Http\Response
     */
    public function show(Travailleur $travailleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Travailleur  $travailleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travailleur $travailleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Travailleur  $travailleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travailleur $travailleur)
    {
        //
    }
}
