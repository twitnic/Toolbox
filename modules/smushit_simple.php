<?php
/*
Module Name: Bildoptimierung beim Upload
Module URI: http://playground.ebiene.de/wordpress-ysmushit-simple/
Description: Reduzierung der hochgeladenen Bilder in der Größe ohne Qualitätsverluste. [Backend]
Author: Sergej Müller
Author URI: http://ebiene.de
*/


/* Sicherheitsabfrage */
if ( !class_exists('Toolbox') ) {
	die();
}


/* Ab hier kann's los gehen */
function optimize_upload_images($data) {
	/* Upload-Ordner */
	$upload = wp_upload_dir();
	
	/* WP-Bugfux */
	if ( empty($upload['subdir']) ) {
		$path = $upload['path'];
		$url = $upload['url'];
		$files = array($data['file']);
	} else {
		$info = pathinfo($data['file']);
		
		$path = $upload['basedir']. '/' .$info['dirname'];
		$url = $upload['baseurl']. '/' .$info['dirname'];
		
		$files = array($info['basename']);
	}
	
	/* Thumbs hinzufügen */
	if ( !empty($data['sizes']) ) {
		foreach( $data['sizes'] as $size ) {
			array_push(
				$files,
				$size['file']
			);
		}
	}
	
	/* Files loopen */
	foreach ($files as $file) {
		/* URL erfragen */
		$response = wp_remote_get(
			esc_url_raw(
				sprintf(
					'http://www.smushit.com/ysmush.it/ws.php?img=%s',
					urlencode($url. '/' .$file)
				),
				'http'
			)
		);
		
		/* Fehler? */
		if ( is_wp_error($response) ) {
			return $data;
		}
		
		/* Dekodieren */
		$ysmush = json_decode(
			wp_remote_retrieve_body($response)
		);
		
		/* Überschreiben */
		if ($ysmush && !empty($ysmush->dest)) {
			@file_put_contents(
				$path. '/' .$file,
		    	@file_get_contents(
		      		urldecode($ysmush->dest)
		    	)
		  	);
		}
	}
	
	return $data;
}


add_filter(
  'wp_generate_attachment_metadata',
  'optimize_upload_images'
);