<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
	
    public function servers() {
    	return view('admin.servers');
    }
}
