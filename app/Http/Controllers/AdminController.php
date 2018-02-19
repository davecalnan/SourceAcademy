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
    
    public function home() {
		$users = User::with('roles')->get();
    	return view('admin.home', ['users' => $users]);
    }
	
    public function organisations($slug = null) {
        if ($slug) {
            $organisation = organisation::where('slug', $slug)->with('users', 'servers')->first();
            return view('admin.organisation', ['organisation' => $organisation]);
        }

        $organisations = organisation::all();
    	return view('admin.organisations', ['organisations' => $organisations]);
    }
	
    public function projects($slug = null) {
        $errors = [];

        if ($slug) {
            if ($project = Project::where('slug', $slug)->with('users')->firstOrFail()) {
                return view('admin.project', ['project' => $project]);
            }
            return array_push($errors, 'This project could not be found');
        }

        $organisations = organisation::all();
        $projects = Project::all();

    	return view('admin.projects', ['organisations' => $organisations, 'projects' => $projects])->withErrors($errors);
    }

    public function servers($id = null) {
        $forge = new \Themsaid\Forge\Forge(config('app.forge_token'));

        if ($id) {
            $server = $forge->server($id);
            $organisation = Server::findOrFail($id)->with('organisation')->firstOrFail()->organisation;
            $sites = $forge->sites($id);

            return view('admin.server', ['organisation' => $organisation, 'server' => $server, 'sites' => $sites]);
        }

        $servers = $forge->servers();
        // array_map(function($server) {
        //     if ($organisation = Server::findOrFail($server->id)->organisation) { // currently this throws an exception if there is no Server record in the database with this $server->id
        //         $server->organisation = $organisation;
        //     }
        // }, $servers);

    	return view('admin.servers', ['servers' => $servers]);
    }
}
