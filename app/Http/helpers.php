<?php

namespace App\Http;

use App\User;
use App\Freelancer;
use App\RoleUser;
use Illuminate\Support\Facades\Hash;

class Helpers{
	function subdomain($url)
	{
		$host = explode('.', parse_url($url)['host']);
		return $subdomain = $host[0];
	}

	#Checks if user with inputted email exists. If not, new user is created.
	static function checkIfUserExists($request)
	{
		$user = User::where('email', $request->input('email'))->first();
		if(is_null($user)){
			$user = self::createUser($request->input('name'), $request->input('email'));
		}
		self::createFreelancer($user, $request);
	}

	static function createUser($name, $email){
		$user = User::create(array(
				    'name' => $name,
				    'password' => Hash::make('password'),
				    'email'    => $email
						));
		return $user;
	}

	static function createFreelancer($user, $request){
		$wordpress = $shopify = false;

		switch ($request->input('type')) {
	    case 'wordpress':
        $wordpress = true;
        break;
	    case 'shopify':
        $shopify = true;
        break;
	    case 'both':
        $wordpress = $shopify = true;
        break;
		}

		Freelancer::create(array(
				    'user_id' => $user->id,
				    'title' => $request->input('title'),
				    'shopify' => $shopify,
						'wordpress' => $wordpress
						));

		if(is_null(RoleUser::where('user_id', $user->id)->first())){
			RoleUser::create(array(
					    'user_id' => $user->id,
					    'role_id' => 2
							));
		}
	}
}
