<?php 

function download_excerpt_function($atts)
{
	$atts = shortcode_atts( array(
		'limit'=>-1,
		'shortcode' => 'yes',
		'limit_words'=>-1,
		'id'=>'',
		'striphtml'=>'no',
		'addtext'=>'...',
		'more' => 'no'
	), $atts, 'download_excerpt' );
	
	if($atts['limit'] > 0)
		$atts['limit_words'] = -1;
	global $post;
	if($atts['id']!='')
	{
		$post=get_post($atts['id']);
	}
	$description = $post->post_content;
	 
	if(has_excerpt( get_the_id() ))
	{
		$description = get_the_excerpt();
		
	}
	else if ( strstr($description,'<!--more-->') && $atts['more'] == 'yes' )
	{
		
		$description = get_the_excerpt();
		 
		$atts['limit'] = -1;
		 
	}
	else
	{
		$description = substr($description,0,250);
		$description  = str_replace('<!--more-->', "", $description );
	}
	if($atts['shortcode'] == 'trim')
		$description = strip_shortcodes( $description );
	
	$description = do_shortcode(wpautop($description));
	
	if($atts['striphtml']=='yes')
		$description = strip_tags($description);	
	if($atts['limit'] > 0)
	{
		$description = substr($description,0,$atts['limit']);
		$description .=$atts['addtext'];
	}
		
	
	if($atts['limit_words']>0)
	{
		$description = limit_words($description,$atts['limit_words']);
		$description .=$atts['addtext'];
	}
	
	return  $description ;
}	

add_shortcode('download_excerpt','download_excerpt_function');

 