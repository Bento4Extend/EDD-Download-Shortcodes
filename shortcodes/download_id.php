<?php 

function download_id_function($atts)
{
	$atts = shortcode_atts( array(
		'limit' => -1,
	), $atts, 'download_id' );
	 
	return get_the_ID();
}

add_shortcode('download_id','download_id_function');