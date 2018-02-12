<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Returns users with the given role.
     *
     * @return \Illuminate\Http\Response
     */
	public function users()
	{
		return $this->belongsToMany('App\User')->withTimestamps();
	}
}
