<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
