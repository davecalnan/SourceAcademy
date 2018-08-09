<?php

namespace App;

use App\Role;
use Exception;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
      'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
    ];

    public function organisations()
    {
        return $this->belongsToMany('App\Organisation');
    }

    public function profile()
    {
        if ($this->is('freelancer')) {
            return $this->hasOne('App\Freelancer');
        }
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project')->withTimestamps();
    }

    public function is($role)
    {
        return $this->role === $role ? true : false;
    }

    public function isAdmin()
    {
        return $this->is('admin');
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

    public static function updateDetails(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        if ($request->email !== $user->email) {
            $request->validate([
                'email' => 'unique:users',
            ]);
        }

        $user->update($request->all());
    }

    public static function createWithRole(Request $request, $role)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'nullable|max:255'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? $request->password : null,
            'role' => $role
        ]);

        return $user;
    }

    public static function setPassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        try {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            return back()->with([
                'status' => 'success',
                'description' => 'Your account has been created.'
            ]);
        }
        catch (Exception $exception){
            $request->session()->flash('failure', 'Your password has not been changed.');
            return back();
        }
    }
}
