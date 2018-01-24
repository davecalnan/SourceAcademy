<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackResponse extends Model
{
    /**
     * Returns the feedback request for this feedback response.
     *
     * @return \Illuminate\Http\Response
     */
    public function request()
    {
    	return $this->belongsTo('App\FeedbackRequest');
    }

    /**
     * Returns possible response options to the parent feedback request of this feedback response.
     *
     * @return \Illuminate\Http\Response
     */
    public function possibleOptions()
    {
    	return $this->request()->options;
    }

    /**
     * Returns the user who submitted this feedback response.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
