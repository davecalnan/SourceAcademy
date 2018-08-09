<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        //
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      //
    ];

    public function __construct()
    {
        $this->options = json_encode(["form_submitted" => false], JSON_FORCE_OBJECT);
    }

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function dones()
    {
        return $this->hasMany('App\Done');
    }

    public function getOptionsAttribute($value)
    {
        return json_decode($value);
    }
}
