<?php 

function download_lowest_price_function($atts)
{
	$atts = shortcode_atts( array(
		'limit' => -1,
		'id' =>''
	), $atts, 'download_price_lowest' );
	 
	if($atts['id']!='')
	{
		$id = $atts['id'] ;
	}
	else 
		$id = get_the_id();
	 
	return edd_currency_filter( edd_format_amount( edd_get_download_price($id,false)) );
	 
	
}

add_shortcode('download_price_lowest','download_lowest_price_function');

