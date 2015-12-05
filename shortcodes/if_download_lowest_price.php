<?php 

function if_download_lowest_price_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'not' => 'no',
		'id'=>'',
		'equals'=>'',
		'greater'=>'',
		'less'=>'',
	), $atts, 'if_download_price_lowest' );
	 
	if($atts['id']!='')
	 
		$id = $atts['id'];
	else
		$id = get_the_id();
	ob_start(); 
	$price = '';
	 
	$price = edd_get_download_price($id);
	
	// echo $price;  
	
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

add_shortcode('if_download_price_lowest','if_download_lowest_price_function');

