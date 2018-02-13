<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // if ($user->is('client')) {
        $projects = $user->projects;

        $client = $user->clients()->first();
        if ($client) {
            $plans = $client->plans()->get();
        } else {
            $plans = [];
        }

        return view('app.client-dashboard', ['projects' => $projects, 'plans' => $plans]);
    // }
    }
}
