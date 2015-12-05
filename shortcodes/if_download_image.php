<?php 

function if_download_image_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'not' => 'no',
		'id'=>'',
		'valid'=>'no'
	), $atts, 'if_download_url_image' );
	 
	if($atts['id']!='')
	 
		$id = $atts['id'];
	else
		$id = get_the_id();
	ob_start(); 
	 
	if($atts['not']=='yes' || $atts['not']==1 )
		if(empty(get_post_thumbnail_id($id)))
		{
			 
			echo do_shortcode($content);
		}	
		else
		{
			echo '';
		}
			
	else
		if(empty(get_post_thumbnail_id($id)))
		{
			echo '';
		}	
		else
		{	
		 
			echo do_shortcode($content);
				
		}
			

	return ob_get_clean();
}

add_shortcode('if_download_url_image','if_download_image_function');

