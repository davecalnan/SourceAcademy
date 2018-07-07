<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        $projects = $user->projects;

        return view('dashboard.home', ['projects' => $projects]);
    }
}
