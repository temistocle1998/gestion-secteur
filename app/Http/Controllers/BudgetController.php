<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();

        return view('budgets.index', compact('budgets'));
    }

    public function create(Budget $region)
    {
        return view('budgets.create', compact('region'));
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

        $region = Budget::create($data);

        return redirect('budgets');
    }

    /**
     * edit the specified resource.
     *
     * @param  \App\Models\Budget  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $region)
    {
        return view('budgets.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $region)
    {
        $data = request()->validate([
            'nom' => 'required|string',
        ]);

        $region->update($data);
        return redirect('budgets/'. $region->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $region)
    {
        $region->delete();
        return redirect('budgets');
    }
}
