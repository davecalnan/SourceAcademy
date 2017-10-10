<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'resources';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'content', 'link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      //
    ];

    public function projects ()
    {
    	return $this
        ->belongsToMany('App\Project')
        ->withTimestamps();
    }
}
