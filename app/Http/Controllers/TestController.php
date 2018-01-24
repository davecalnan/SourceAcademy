<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function admin(Request $request)
    {
        return view('admin.test');
    }

    public function app(Request $request)
    {
        $query = (object) $request->query();

        foreach ($query as $key => $value) {
            Cookie::queue($key, $value, 60);
        }

        if ($request->cookie('name')) {
            return $request->cookie('name');
        }

        return response('Now with cookies.');
    }

    public function test()
    {
        return response('test');
    }

    public function authCheck()
    {
        dd(Auth::check());
    }
}
