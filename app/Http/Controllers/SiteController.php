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

    public function aboutUs()
    {
        return view('site.pages.about-us');
    }

    public function wordpress()
    {
        return view('site.pages.wordpress');
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

    public function forBusinessOwners()
    {
        return view('site.pages.for-business-owners');
    }

    public function forEntrepreneurs()
    {
        return view('site.pages.for-entrepreneurs');
    }

    public function forFreelancers()
    {
        return view('site.pages.for-freelancers');
    }

    public function forOnlineRetailers()
    {
        return view('site.pages.for-online-retailers');
    }

    public function whatWeDoDifferently()
    {
        return view('site.pages.what-we-do-differently');
    }

    public function ourProcess()
    {
        return view('site.pages.our-process');
    }
}
