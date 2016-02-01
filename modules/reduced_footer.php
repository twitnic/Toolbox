<?php
/*
Module Name: Reduzierung des Admin-Footers
Description: Entfernt den Inhalt des Footers im Administrationsbereich des Blogs. [Backend]
Author: Sergej Müller
Author URI: http://ebiene.de
*/


/* Sicherheitsabfrage */
if ( !class_exists('Toolbox') ) {
	die();
}


/* Ab hier kann's los gehen */
add_filter( 'admin_footer_text', '__return_false' );
add_filter( 'update_footer', '__return_false', 11 );