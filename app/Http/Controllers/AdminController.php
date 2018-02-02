<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
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
        if ($slug) {
            return 'slug';
            if ($project = Project::where('slug', $slug)->with('users')->firstOrFail()) {
                return true;
            }
            return false;
            return view('admin.project', ['project' => $project]);
        }

        $projects = Project::all();
    	return view('admin.projects', ['projects' => $projects]);
    }

    public function servers() {
    	return view('admin.servers');
    }
}
