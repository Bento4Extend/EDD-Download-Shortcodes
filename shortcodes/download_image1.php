<?php 

function download_image_function($atts)
{
	$atts = shortcode_atts( array(
		'id'=>'',
		'attribute_id'=>'',
		'show'=>'',
		'before'=>'',
		'after'=>'',
		'height'=>'',
		'width'=>'',
		'align'=>'',
		'alt'=>'',
		'size'=>'full',
	), $atts, 'download_url_image' );
	 
	if($atts['id']!='')
		$id = $atts['id'];
	else
		$id = get_the_ID();
	 
	$attributes ='';
	
	if($atts['style']!='')
		$attributes .= 'style="'.$atts['style'].'" ';
	if($atts['alt']!='')
		$attributes .= 'alt="'.$atts['alt'].'" ';
	if($atts['id']!='')
		$attributes .= 'id="'.$atts['attribute_id'].'" ';
	if($atts['align']!='')
		$attributes .= 'align="'.$atts['align'].'" ';
	if($atts['width']!='')
		$attributes .= 'width="'.$atts['width'].'" ';
	if($atts['height']!='')
		$attributes .= 'height="'.$atts['height'].'" ';
	
	
	$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($id) ,$atts['size']);
	 
	if($atts['show']=='url')
		return $feat_image[0];
	
	$img = '<img src="'.$feat_image[0].'" '.$attributes.' />';
	 
	return $img;
}

add_shortcode('download_url_image','download_image_function');

