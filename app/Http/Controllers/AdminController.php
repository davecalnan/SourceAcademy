<?php

namespace App\Http\Controllers;

use App\Client;
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
	
    public function clients($slug = null) {
        if ($slug) {
            $client = Client::where('slug', $slug)->with('users', 'servers')->first();
            return view('admin.client', ['client' => $client]);
        }

        $clients = Client::all();
    	return view('admin.clients', ['clients' => $clients]);
    }
	
    public function projects($slug = null) {
        $errors = [];

        if ($slug) {
            if ($project = Project::where('slug', $slug)->with('users')->firstOrFail()) {
                return view('admin.project', ['project' => $project]);
            }
            return array_push($errors, 'This project could not be found');
        }

        $clients = Client::all();
        $projects = Project::all();

    	return view('admin.projects', ['clients' => $clients, 'projects' => $projects])->withErrors($errors);
    }

    public function servers($id = null) {
        $forge = new \Themsaid\Forge\Forge(config('app.forge_token'));

        if ($id) {
            $server = $forge->server($id);
            $client = Server::findOrFail($id)->with('client')->firstOrFail()->client;
            $sites = $forge->sites($id);

            return view('admin.server', ['client' => $client, 'server' => $server, 'sites' => $sites]);
        }

        $servers = $forge->servers();
        // array_map(function($server) {
        //     if ($client = Server::findOrFail($server->id)->client) { // currently this throws an exception if there is no Server record in the database with this $server->id
        //         $server->client = $client;
        //     }
        // }, $servers);

    	return view('admin.servers', ['servers' => $servers]);
    }
}
