<?php

namespace App\Http\Controllers;

use App\Done;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private function updateProjectBasedOnQueryString(Request $request)
    {
        $user = Auth::user();
        $project = $user->projects()->first();

        foreach ($request->query() as $key => $value) {
            $project->fill(["options->$key" => $value]);
        }

        return $project->save();
    }

    public function home(Request $request)
    {
        $this->updateProjectBasedOnQueryString($request);

        $user = Auth::user();
        $project = $user->projects()->first();

        // $dones = Done::where('project_id', 1)->orderBy('created_at', 'desc')->simplePaginate(100);

        return view('dashboard.pages.home', ['project' => $project, 'user' => $user]);

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

    public function form()
    {
        return view('dashboard.pages.form');
    }
}
