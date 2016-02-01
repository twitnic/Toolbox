<?php
/*
Module Name: Filterung des Pingback-Headers
Description: Eliminierung des von WordPress gesendeten Pingback-Headers "X-Pingback". [Frontend]
Author: Sergej Müller
Author URI: http://ebiene.de
*/


/* Sicherheitsabfrage */
if ( !class_exists('Toolbox') ) {
	die();
}


/* Ab hier kann's los gehen */
add_filter(
	'wp_headers',
	function ($header) {
		unset($header['X-Pingback']);
		
		return $header;
	}
);