<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Secteur;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agences = Agence::all();

        return view('agences.index', compact('agences'));
    }

    public function create(Agence $agence)
    {
        return view('agences.create', compact('agence'));
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

        $agence = Agence::create($data);

        return redirect('agences');
    }

    /**
     * edit the specified resource.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        return view('agences.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agence $agence)
    {
        $data = request()->validate([
            'nom' => 'required|string',
        ]);

        $agence->update($data);
        return redirect('agences/'. $agence->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect('agences');
    }
}
