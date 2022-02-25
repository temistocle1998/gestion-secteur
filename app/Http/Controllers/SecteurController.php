<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Agent;
use App\Models\Secteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecteurController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Secteur::class);
        $secteurs = Secteur::all();

        return view('secteurs.index', compact('secteurs'));
    }

    public function create(Secteur $secteur)
    {
        return view('secteurs.create', compact('secteur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nom' => 'required|string',
        ]);

        $secteur = Secteur::create($data);

        return redirect('secteurs');
    }

    /**
     * edit the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Secteur $secteur)
    {
        return view('secteurs.edit', compact('secteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secteur $secteur)
    {
        $data = request()->validate([
            'nom' => 'required|string',
        ]);

        $secteur->update($data);
        return redirect('secteurs/'. $secteur->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secteur $secteur)
    {
        $secteur->delete();
        return redirect('secteurs');
    }

    public function secteurByAdmin($id)
    {
        $idAgence = Agent::with('agences')->where('user_id', Auth::user()->id);

        $idAgence = $idAgence->get()->map(function ($idAgence)
        {
            return [
                'idAgence'=>$idAgence->agence_id
            ];
        });

        $nomAgence = Agence::find($idAgence);

        $datas = Agent::with('agences')->where('user_id', Auth::user()->id);

        return view('agents.secteurs', compact('datas', 'nomAgence'));
    }
}
