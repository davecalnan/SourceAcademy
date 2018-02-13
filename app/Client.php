<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Client extends Model
{
    use Billable;

    public $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function path()
    {
        return '/clients/' . $this->slug;
    }

    // Relationships
    public function plans()
    {
        return $this->belongsToMany('App\Plan');
    }
    public function projects()
    {
        return $this->hasMany('App\Server');
    }
    
    public function servers()
    {
        return $this->hasMany('App\Server');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
