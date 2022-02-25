<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Secteur;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Region::class);
        $regions = Region::all();

        return view('regions.index', compact('regions'));
    }

    public function create(Region $region)
    {
        return view('regions.create', compact('region'));
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

        $region = Region::create($data);

        return redirect('regions');
    }

    /**
     * edit the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $data = request()->validate([
            'nom' => 'required|string',
        ]);

        $region->update($data);
        return redirect('regions/'. $region->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect('regions');
    }

    public function regionWithSecteurs(Region $region)
    {
        $collections = Region::with('secteurs')->where('id', $region->id)->get();

       return view('regions.region-secteur', compact('region', 'collections'));
    }

    public function affecterSecteur($id)
    {
        $secteurs = Secteur::all();

        return view('regions.affectation', compact('secteurs'));
    }

    public function affecter()
    {
        # code...
    }


}
