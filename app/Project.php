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
    protected $fillable = [
      'name', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      //
    ];

    public function users()
    {
        return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
    }

    public function resources()
    {
        return $this
        ->belongsToMany('App\Resource')
        ->withTimestamps();
    }
}
