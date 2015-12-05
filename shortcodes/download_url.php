<?php 

function download_url_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'limit' => -1,
		'id'=>'',
		'text'=>'',
		'before'=>'',
		'after'=>'',
		'rel'=>'',
		'target'=>'',
		'style'=>'',
		'class'=>'',
		'attribute_id'=>'',
		'title'=>'',
		'tabindex'=>'',
		'attributes'=>'',
		'show'=>'',
	), $atts, 'download_url' );
	
	global $post;
	 
	 
	if($atts['id']!='')
		$url = get_permalink($atts['id']);
	else
		$url = get_permalink();
	
	
	$attributes ='';
	
	if($atts['attribute_id']!='')
		$attributes .= 'id="'.$atts['attribute_id'].'" ';
	
	if($atts['class']!='')
		$attributes .= 'class="'.$atts['class'].'" ';
	
	if($atts['rel']!='')
		$attributes .= 'rel="'.$atts['rel'].'" ';
	
	if($atts['target']!='')
		$attributes .= 'target="'.$atts['target'].'" ';
	
	if($atts['style']!='')
		$attributes .= 'style="'.$atts['style'].'" ';
	
	if($atts['tabindex']!='')
		$attributes .= 'tabindex="'.$atts['tabindex'].'"  ';
	
	if($atts['title']!='')
		$attributes .= 'title="'.$atts['title'].'" ';
	
	if($atts['attributes']!='')
		$attributes .= $atts['attributes'];
	
	 
	if($atts['text']=='no')
	{
		$link = '<a href="'.$url.'" '.$attributes.' >';
		$output = $link;
	}
	else if ($atts['text']!='' && $atts['text']!='no')
	{
		$link = '<a href="'.$url.'" '.$attributes.' >'.$atts['text'].'</a>';
		$output = $link;
	}
	else if($atts['text']=='' && $atts['show']=='url')
		$output = $url;
	else
	{
		$link = '<a href="'.$url.'" '.$attributes.' >'.$url.'</a>';
		$output = $link;
	}
	
	return $atts['before'].$output.$atts['after'];
}

add_shortcode('download_url','download_url_function');

