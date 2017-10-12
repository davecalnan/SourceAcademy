<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'project_id', 'user_id', 'name', 'description', 'link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      //
    ];
	/**
     * Get the user that owns the asset.
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Get the project to which the asset belongs.
     */
    public function project()
    {
    	return $this->belongsTo('App\Project');
    }
}
