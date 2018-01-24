<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackOption extends Model
{
    /**
     * Returns the feedback request this to which this option belongs.
     *
     * @return \Illuminate\Http\Response
     */
    public function request()
    {
    	return $this->belongsTo('App\FeedbackRequest');
    }
}
