<?php 

function if_download_name_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'not' => 'no',
		'id'=>'',
		'is'=>'',
		'is_sensitive'=>'',
		'equals'=>'',
		'greater'=>'',
		'less'=>'',
		'search'=>'',
		'search_sensitive'=>''
		
	), $atts, 'if_download_name' );
	 
	if($atts['id']!='')
	 
		$id = $atts['id'];
	else
		$id = get_the_id();
	
	ob_start(); 
	$name = get_the_title($id);
	$str_length = strlen($name);
 	if($atts['not']=='yes' || $atts['not']==1)
		if(eval_condition($str_length,$atts['equals'],$atts['greater'],$atts['less']) && is_equals($name,$atts['is']) && is_equals_sensitive($name,$atts['is_sensitive']) && is_present($name,$atts['search']) && is_present_sensitive($name,$atts['search_sensitive']) )
			echo '';
		else
			echo do_shortcode($content);
	else
		if(eval_condition($str_length,$atts['equals'],$atts['greater'],$atts['less']) && is_equals($name,$atts['is']) && is_equals_sensitive($name,$atts['is_sensitive']) && is_present($name,$atts['search']) && is_present_sensitive($name,$atts['search_sensitive']) )
			echo do_shortcode($content);
		else
			echo '';
	return ob_get_clean();
}

add_shortcode('if_download_name','if_download_name_function');

