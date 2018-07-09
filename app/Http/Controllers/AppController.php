<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    // This needs to be replaced with freelancer-specific stuff.
    public function home()
    {
        $user = Auth::user();

        $projects = $user->projects;

        $organisation = $user->organisations()->first();
        if ($organisation) {
            $plans = $organisation->plans()->get();
        } else {
            $plans = [];
        }

        return view('app.home', ['projects' => $projects, 'plans' => $plans]);
    }

    public function projects()
    {
        $projects = Project::all();

        return view('app.projects.index', ['projects' => $projects]);
    }

    public function project(Project $project)
    {
        return view('app.projects.single', ['project' => $project]);
    }
}
