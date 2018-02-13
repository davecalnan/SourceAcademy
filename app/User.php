<?php

namespace App;

use App\Role;
use Exception;
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

    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }

    public function profile()
    {
        if ($this->is('sourceror')) {
            return $this->hasOne('App\Sourceror');
        }
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project')->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
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

    public function is($type)
    {
        $method = $type . 's()';
        // dd($method);
        // dd($this->$method->get());
        if (count($this->$method)) {
            return true;
        }
        return false;
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

    public static function createWithRole(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'nullable|max:255'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? $request->password : null
        ]);

        if (isset($request->role) && $role = Role::where('name', $request->role)->first()) {
            $user->roles()->attach($role);
        }
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
