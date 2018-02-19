<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
