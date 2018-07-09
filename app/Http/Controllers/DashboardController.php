<?php

namespace App\Http\Controllers;

use App\Project;
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

    public function projects()
    {
        $projects = Project::all();

        return view('dashboard.projects.index', ['projects' => $projects]);
    }

    public function project(Project $project)
    {
        return view('dashboard.projects.single', ['project' => $project]);
    }
}
