<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Constructor function.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        $host = explode('.', parse_url(url()->current())['host']);
        $subdomain = $host[0];

        if ($subdomain == 'admin') {
            return view('admin.projects.index', compact('projects'));
        }
        return view('app.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project($request->all());
        $project->slug = str_slug($request->name);

        $request->validate([
            'name' => 'required|unique:projects|max:255',
            'type' => 'required'
        ]);

        $project->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $assets = $project->assets;
        $resources = $project->resources;

        $host = explode('.', parse_url(url()->current())['host']);
        $subdomain = $host[0];

        if ($subdomain == 'admin') {
            return view('admin.projects.single', compact('project', 'assets', 'resources'));
        }
        return view('app.projects.single', compact('project', 'assets', 'resources'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * If the user has projects, display a listing of their projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserProjects()
    {
        $user = Auth::user();
        $projects = $user->has('projects') ? $user->projects()->get() : [];

        if (count($user->projects) == 1) {
            return redirect('/projects/' . $user->projects()->first()->slug);
        }

        $title = 'Your Projects';

        return view('app.projects.index', compact('projects', 'title'));
    }
}
