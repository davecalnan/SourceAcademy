<?php

namespace App\Http\Controllers;

use App\Project;
use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
        $resources = Resource::all();
        return view('app.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $resource = new Resource($request->all());

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $resource->save();

        if (isset($request->project)) {
            $project = Project::find($request->project);
            $resource->projects()->attach($project);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        return $resource;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('admin.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $resource->update([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link
        ]);

        return redirect(route('admin.home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();

        return back();
    }

    /**
     * Returns all resources attached to projects the user is attached to.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function getUserResources(\App\User $user)
    {
        $resources = $user->projects->load('resources');
    }
}
