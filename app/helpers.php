<?php

function slugify($string)
{
	$string = preg_replace('/[^a-zA-Z0-9]/', '', $string);
	$string = strtolower($string);

	return $string;
}

function subdomain($url)
{
	$host = explode('.', parse_url($url)['host']);
	return $subdomain = $host[0];
}

#Checks if user with inputted email exists. If not, new user is created.
function checkIfUserExists($request)
{
	$user = User::where('email', $request->input('email'))->first();
	if (is_null($user)) {
		$user = createUser($request->input('name'), $request->input('email'));
	}
	createFreelancer($user, $request);
}

function createUser($name, $email)
{
	$user = User::create(array(
		'name' => $name,
		'password' => Hash::make('password'),
		'email' => $email
	));
	return $user;
}

function createFreelancer($user, $request)
{
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

	if (is_null(RoleUser::where('user_id', $user->id)->first())) {
		RoleUser::create(array(
			'user_id' => $user->id,
			'role_id' => 2
		));

		$token = app('auth.password.broker')->createToken($user);
		$link = "http://sourceacademy.local/password/reset/" . $token;

		$data = array(
			'name' => "Jack",
			'link' => $link
		);

		Mail::send('emails.welcome', $data, function ($message) {
			$message->to('jack.mallonk@gmail.com', 'To Me')->subject('Test Email');
			$message->from('jack.mallonk@gmail.com', 'Jacko');
		});
	}
}