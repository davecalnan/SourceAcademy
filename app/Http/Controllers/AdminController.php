<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	/**
     * Returns the admin home view.
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {
		$users = User::all();
    	return view('admin.home', compact('users'));
    }
}
