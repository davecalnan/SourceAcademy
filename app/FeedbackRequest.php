<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackRequest extends Model
{
	/**
     * Returns responses to this feedback request.
     *
     * @return \Illuminate\Http\Response
     */
    public function responses()
    {
    	return $this->hasMany('App\FeedbackResponse');
    }

	/**
     * Returns possible response options to this feedback request.
     *
     * @return \Illuminate\Http\Response
     */
    public function options()
    {
    	return $this->hasMany('App\FeedbackOption');
    }
}
