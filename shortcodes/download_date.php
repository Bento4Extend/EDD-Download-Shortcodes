<?php 

function download_date_function($atts)
{
	$atts = shortcode_atts( array(
		'id'=>'',
		'format'=>'Y/m/d \a\t g:i A',
		'type'=>'',
	), $atts, 'download_date' );
	if($atts['id']!='')
		$id = $atts['id'];
	else
		$id = get_the_ID();
	if($atts['type']=='modified')
		$date = the_modified_date($atts['format'], '', '',false);
	else
		$date = the_date($atts['format'], '', '',false);
	
	return $date;
}

add_shortcode('download_date','download_date_function');