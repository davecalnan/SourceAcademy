<?php

namespace App\Http\Controllers;

use App\Done;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $dones = Done::where('project_id', 1)->orderBy('created_at', 'desc')->simplePaginate(100);

        return view('dashboard.pages.home', ['dones' => $dones]);

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
