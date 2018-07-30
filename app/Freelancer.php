<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Mail;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    protected $fillable = [
        'user_id', 'title', 'shopify', 'wordpress'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    #Checks if user exists
    static function getUser($request)
    {
      $user = User::where('email', $request->input('email'))->first();
      if(is_null($user)){
        $user = self::createUser($request->input('name'), $request->input('email'));
      }

      if(is_null(RoleUser::where('user_id', $user->id)->first())){
        self::updateRole($user);
      }

      return $user;
    }

    #Creates new user
    static function createUser($name, $email){
      $user = User::create(array(
              'name' => $name,
              'password' => Hash::make(bin2hex(openssl_random_pseudo_bytes(4))),
              'email'    => $email
              ));
      return $user;
    }

    #Updates role and sends email
    static function updateRole($user){
      RoleUser::create(array(
              'user_id' => $user->id,
              'role_id' => 2
              ));

      $token = app('auth.password.broker')->createToken($user);
      $link = "http://sourceacademy.local/password/reset/" . $token;


      Mail::send('emails.welcome', ['link' => $link], function($message) use ($user) {
        $message->to($user->email,'To Me')->subject('Welcome To SourceAcademy');
        $message->from('jack.mallonk@gmail.com','SourceAcademy');
      });
    }

    #Returns whether user is capable of shopify or not
    static function shopify($request){
      if($request->input('type') == 'wordpress'){
        return false;
      } else {
        return true;
      }
    }

    #Returns whether user is capable of wordpress or not
    static function wordpress($request){
      if($request->input('type') == 'shopify'){
        return false;
      } else {
        return true;
      }
    }

}
