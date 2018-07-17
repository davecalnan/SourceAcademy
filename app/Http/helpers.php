<?php

namespace App\Http;

function subdomain($url)
{
	$host = explode('.', parse_url($url)['host']);
	return $subdomain = $host[0];
}