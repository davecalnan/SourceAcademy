<?php

namespace App\Http\Controllers;

use App\FeedbackResponse;
use Illuminate\Http\Request;

class FeedbackResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $feedbackResponse = new FeedbackResponse($request->all());
        $possibleOptions = $feedbackResponse->possibleOptions();

        // Find which possible feedback option this response matches. If no matches, 'passed_validation' will be false.
        foreach ($possibleOptions as $potentialOption) {
            $potentialOption = $possibleOption::where('icon', $feedbackResponse->icon);
            if ($potentialOption->title == $feedbackResponse->title) {
                return $feedbackOption = $potentialOption;
            }
        }

        if (isset($feedbackOption)) {
            $feedbackResponse->passed_validation = true;
        }

        $feedbackResponse->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackResponse $feedbackResponse)
    {
        //
    }
}
