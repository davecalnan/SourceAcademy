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
            'slug' => 'required|unqiue:projects'
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
        $project->load('resources');
        return view('app.projects.single', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
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
     * Display a listing of the user's projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserProjects () {
        $user = Auth::user();
        $projects = [];

        if ($user->has('projects')) {
            $projects = $user->projects()->get();
        }

        $title = 'Your Projects';
        
        return view('app.projects.index', compact('projects', 'title'));
    }

    /**
     * Displays all projects for an admin user with a form to create a new project.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex () {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Displays a single project for an admin user with a form to create a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminShow (Project $project) {
        return view('admin.projects.single', compact('project'));
    }
}
