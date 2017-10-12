<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
    ];

    public function projects()
    {
      return $this
      ->belongsToMany('App\Project')
      ->withTimestamps();
    }

    public function roles()
    {
      return $this
      ->belongsToMany('App\Role')
      ->withTimestamps();
    }

    public function assets()
    {
      return $this->hasMany('App\Asset');
    }

    public function authorizeRoles($roles)
    {
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(401, 'This action is unauthorized.');
    }

    public function hasAnyRole($roles)
    {
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      } else {
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }
    
    public function hasRole($role)
    {
      if ($this->roles()->where('name', $role)->first()) {
        return true;
      }
      return false;
    }
    
    public function getRoles()
    {
      if ($this->roles()) {
        return $this->roles()->get();
      }
    }

    public function isAdmin()
    {
      return $this->hasRole('admin');
    }

    public function canAccess($resource)
    {
      if ($this->projects()->wherePivot('id', $resource->id)->first()) {
        return true;
      }
      return false;
    }

    public function has($resource)
    {   
        if (count($this->$resource)) {
            return true;
        }
        return false;
    }

    public function hasNone($resource)
    {
        if (!count($this->$resource)) {
            return true;
        }
        return false;
    }
  }
