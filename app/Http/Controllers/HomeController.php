<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 'admin') {
            return view('admin.dashboard');
        }
        if ($role == 'admin-agence') {
            return view('admin-agence.dashboard');
        }
        if ($role == 'agent') {
            return view('agents.dashboard');
        }
        else {
            return view('dashboard');
        }
    }
}
