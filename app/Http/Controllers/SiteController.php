<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function freelancers()
    {
        // $freelancers = Freelancer::all();
        return view('site.freelancers', ['freelancers' => $freelancers]);
    }

    public function freelancer(Freelancer $freelancer)
    {
        return view('site.freelancer', ['freelancer' => $freelancer]);
    }
}
