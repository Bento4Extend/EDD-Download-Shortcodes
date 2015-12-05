<?php 

function if_download_price_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'not' => 'no',
		'id'=>'',
		'equals'=>'',
		'greater'=>'',
		'less'=>''
	), $atts, 'if_download_price' );
	 
	 
	if($atts['id']!='')
	 
		$id = $atts['id'];
	else
		$id = get_the_id();
	ob_start(); 
	$price = '';
	if( edd_has_variable_prices( $id ) ) {
		 
		$get_default_price = edd_get_default_variable_price($id);
		$prices = edd_get_variable_prices( $id );
		
		$price = $prices[$get_default_price]['amount'];
		 
	} else {
		$price = edd_get_download_price($id);
	}
	
	 
	 
 		
	if($atts['not']=='yes' || $atts['not']=='1' )
		if(!eval_condition($price,$atts['equals'],$atts['greater'],$atts['less']))
			echo do_shortcode($content);
		else
			echo '';
	else
		if(eval_condition($price,$atts['equals'],$atts['greater'],$atts['less']))
			echo do_shortcode($content);
		else
			echo '';
	return ob_get_clean();
}

add_shortcode('if_download_price','if_download_price_function');

