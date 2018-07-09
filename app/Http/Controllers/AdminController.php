<?php

namespace App\Http\Controllers;

use App\Organisation;
use App\Project;
use App\Server;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	/**
     * Constructor function.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
		$users = User::with('roles')->get();
    	return view('admin.home', ['users' => $users]);
    }
	
    public function organisations()
    {
        $organisations = Organisation::all();

    	return view('admin.organisations.index', ['organisations' => $organisations]);
    }

    public function organisation(Organisation $organisation)
    {
        return view('admin.organisations.single', ['organisation' => $organisation]);
    }
	
    public function projects()
    {
        $organisations = organisation::all();
        $projects = Project::all();

    	return view('admin.projects.index', ['organisations' => $organisations, 'projects' => $projects]);
    }

    public function project(Project $project)
    {
        $organisation = $project->organisation;
        $users = $project->users;

        return view('admin.projects.single', ['project' => $project, 'organisation' => $organisation, 'users' => $users]);
    }

    public function editProject(Project $project)
    {
        return view ('admin.projects.edit', ['project' => $project]);
    }

    public function servers()
    {
        $forge = new \Themsaid\Forge\Forge(config('app.forge_token'));

        $servers = $forge->servers();
        // array_map(function($server) {
        //     if ($organisation = Server::findOrFail($server->id)->organisation) { // currently this throws an exception if there is no Server record in the database with this $server->id
        //         $server->organisation = $organisation;
        //     }
        // }, $servers);

    	return view('admin.servers.index', ['servers' => $servers]);
    }

    public function server($id)
    {
        $forge = new \Themsaid\Forge\Forge(config('app.forge_token'));

        $server = $forge->server($id);
        $organisation = Server::findOrFail($id)->with('organisation')->firstOrFail()->organisation;
        $sites = $forge->sites($id);

        return view('admin.server.single', ['organisation' => $organisation, 'server' => $server, 'sites' => $sites]);
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }
}
