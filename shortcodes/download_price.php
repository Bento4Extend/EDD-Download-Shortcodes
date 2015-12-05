<?php 

function download_price_function($atts)
{
	$atts = shortcode_atts( array(
		'limit' => -1,
		'id' => ''
	), $atts, 'download_price' );
	if($atts['id']!='')
	{
		$id = $atts['id'] ;
	}
	else 
		$id = get_the_id();
	if( edd_has_variable_prices( $id ) ) {
		 
		$get_default_price = edd_get_default_variable_price($id);
		 
		return edd_price($id,false,$get_default_price);
	} else {
		return edd_price($id,false);
	}
	
}

add_shortcode('download_price','download_price_function');

