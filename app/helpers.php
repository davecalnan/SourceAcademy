<?php

function slugify($string)
{
	$string = preg_replace('/[^a-zA-Z0-9]/', '', $string);
	$string = strtolower($string);

	return $string;
}
