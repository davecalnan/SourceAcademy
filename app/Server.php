<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }
}
