<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function organisations()
    {
        return $this->belongsToMany('App\Organisation');
    }
}
