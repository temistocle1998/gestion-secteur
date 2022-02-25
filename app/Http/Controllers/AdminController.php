<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Agent;
use App\Models\Budget;
use App\Models\Probleme;
use App\Models\Region;
use App\Models\Revenu;
use App\Models\Secteur;
use App\Models\Travailleur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'super-admin') {
            $userCount = User::all()->count();

            $secteurCount = Secteur::all()->count();

            $agenceCount = Agence::all()->count();

            $budgetCount = Revenu::all()->count();

            return view('admin.dashboard', compact('userCount', 'secteurCount', 'agenceCount', 'budgetCount'));
        }

        if (Auth::user()->role === 'admin-agence') {

            $userCount = User::all()->count();

            $idAgence = Agent::with('agences')->where('user_id', Auth::user()->id);

            $idAgence = $idAgence->get()->map(function ($idAgence)
            {
                return [
                    'idAgence'=>$idAgence->agence_id
                ];
            });

            $nomAgence = Agence::find($idAgence);

            $secteurCount = Secteur::all()->count();

            $problemeCount = Probleme::all()->count();

            $travailleurCount = Travailleur::count();

            return view('agents.dashboard', compact('userCount', 'secteurCount', 'problemeCount', 'travailleurCount', 'nomAgence'));
        }
    }
}
