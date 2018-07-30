<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\User;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers = Freelancer::with('user')->get();
        foreach ($freelancers as $freelancer) {
            $freelancer->name = $freelancer->user->name;
        }
        // dd($freelancers);

        // $freelancers = User::whereHas('roles', function ($query) {
        //     $query->where('name', 'freelancer');
        // })->get();

        return view('site.freelancers.index', compact('freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $freelancer = new Freelancer;
        $user = $freelancer->getUser($request);

        $freelancer->user_id = $user->id;
        $freelancer->title = $request->input('title');
        $freelancer->shopify = $freelancer->shopify($request);
        $freelancer->wordpress = $freelancer->wordpress($request);
        $freelancer->save();

        return redirect(route('admin.freelancers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancer $freelancer)
    {
        if ($freelancer) {
            return $freelancer;
        }
        return response('Freelancer not found.', 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelancer $freelancer)
    {
        //
    }
}
