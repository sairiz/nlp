<?php

use Sairiz\Nlp\Nlp;

Route::get('nlp', function()
{
	$date = new Nlp('17','06','1984');

	return $date->mirror();
});

Route::get('how', function()
{
	$date = 06;

	return $date;
});