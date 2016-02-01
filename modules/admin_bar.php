<?php
/*
Module Name: Modifizierung der Admin Bar
Module URI: https://plus.google.com/110569673423509816572/posts/eFtCpa2AH1L
Description: Entfernung einzelner Menüeinträge + Suche über Beiträge hinweg im Admin. [Backend]
Author: Sergej Müller
Author URI: http://ebiene.de
*/


/* Sicherheitsabfrage */
if ( !class_exists('Toolbox') ) {
	die();
}


/* Ab hier kann's los gehen */
function adjust_admin_bar() {
	/* Global */
	global $wp_admin_bar;
	
	/* Aktiv und Admin? */
	if ( !is_admin_bar_showing() or !is_admin() ) {
		return;
	}
	
	/* Einträge löschen */
	$wp_admin_bar->remove_menu('view');
	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('appearance');
	$wp_admin_bar->remove_menu('view-site');
	$wp_admin_bar->remove_menu('new-content');
	$wp_admin_bar->remove_menu('my-account');
	
	/* Suche definieren */
	$form  = '<form action="' .esc_url( admin_url('edit.php') ). '" method="get" id="adminbarsearch">';
	$form .= '<input class="adminbar-input" name="s" tabindex="1" type="text" value="" maxlength="50" />';
	$form .= '<input type="submit" class="adminbar-button" value="' .__('Search'). '"/>';
	$form .= '</form>';
	
	/* Suche einbinden */
	$wp_admin_bar->add_menu(
		array(
			'parent' => 'top-secondary',
			'id'     => 'search',
			'title'  => $form,
			'meta'   => array(
				'class' => 'admin-bar-search'
			)
		)
	);
}

/* Funktionsaufruf */
add_action(
	'wp_before_admin_bar_render',
	'adjust_admin_bar'
);