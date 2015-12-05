<?php 

function if_download_description_function($atts,$content)
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
		
	), $atts, 'if_download_description' );
	 
	
	if($atts['id']!='')
	{
		$post=get_post($atts['id']);
		$description = $post->post_content;
	}
	else
	{
		$description = get_the_content();
	}
	 
	
	 
	$str_length = strlen($description);
	ob_start(); 
 	if($atts['not']=='yes' || $atts['not']==1)
		if(eval_condition($str_length,$atts['equals'],$atts['greater'],$atts['less']) && is_equals($description,$atts['is']) && is_equals_sensitive($description,$atts['is_sensitive']) && is_present($description,$atts['search']) && is_present_sensitive($description,$atts['search_sensitive']) )
			echo '';
		else
			echo do_shortcode($content);
	else
		if(eval_condition($str_length,$atts['equals'],$atts['greater'],$atts['less']) && is_equals($description,$atts['is']) && is_equals_sensitive($description,$atts['is_sensitive']) && is_present($description,$atts['search']) && is_present_sensitive($description,$atts['search_sensitive']) )
			echo do_shortcode($content);
		else
			echo '';
	return ob_get_clean();
}

add_shortcode('if_download_description','if_download_description_function');

