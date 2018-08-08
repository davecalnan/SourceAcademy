<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function getSubdomainForRole()
    {
        $user = Auth::user();

        if ($user->is('admin')) {
            return 'admin.';
        } elseif ($user->is('customer')) {
            return 'dashboard.';
        } elseif ($user->is('freelancer')) {
            return 'app.';
        }

        return '';
    }

    public function redirect($uri = '')
    {
        if (Auth::check()) {
            $subdomain = $this->getSubdomainForRole();
    
            return redirect('//' . $subdomain . env('APP_DOMAIN') . '/' . $uri);
        }
        return redirect()->route('site.home');
    }

    public function www($uri = '')
    {
        return redirect('//' . env('APP_DOMAIN') . '/' . $uri);
    }
}
