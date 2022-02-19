<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Region;
use App\Models\Secteur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // if(Auth::user()->role === 'admin'){
        $userCount = User::all()->count();
        
        $secteurCount = Secteur::all()->count();

        $regionCount = Region::all()->count();

        $budgetCount = Budget::all()->count();

        return view('admin.dashboard', compact('userCount', 'secteurCount', 'regionCount', 'budgetCount'));
        
    }
}
