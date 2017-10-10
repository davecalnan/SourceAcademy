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
    
	/**
     * Returns the admin home view.
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {
		$users = User::with('roles')->get();
    	return view('admin.home', compact('users'));
    }
}
