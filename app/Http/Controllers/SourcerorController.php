<?php

namespace App\Http\Controllers;

use App\Sourceror;
use App\User;
use Illuminate\Http\Request;

class SourcerorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sourcerors = Sourceror::with('user')->get();
        foreach ($sourcerors as $sourceror) {
            $sourceror->name = $sourceror->user->name;
        }
        // dd($sourcerors);

        // $sourcerors = User::whereHas('roles', function ($query) {
        //     $query->where('name', 'sourceror');
        // })->get();
        
        return view('site.sourcerors.index', compact('sourcerors'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sourceror  $sourceror
     * @return \Illuminate\Http\Response
     */
    public function show(Sourceror $sourceror)
    {
        if ($sourceror) {
            return $sourceror;
        }
        return response('Sourceror not found.', 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sourceror  $sourceror
     * @return \Illuminate\Http\Response
     */
    public function edit(Sourceror $sourceror)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sourceror  $sourceror
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sourceror $sourceror)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sourceror  $sourceror
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sourceror $sourceror)
    {
        //
    }
}
