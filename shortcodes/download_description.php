<?php 

function download_description_function($atts)
{
	$atts = shortcode_atts( array(
		'limit'=>-1,
		'shortcode' => 'yes',
		'limit_words'=>-1,
		'id' => '',
		'striphtml'=>'no',
		'addtext'=>'...',
	), $atts, 'download_description' );
	if($atts['limit'] > 0)
		$atts['limit_words'] = -1;
	if($atts['id']!='')
	{
		$post=get_post($atts['id']);
		$description = $post->post_content;
	}
	else
	{
		$description = get_the_content();
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
	
	if($atts['limit_words']>0){
		$description = limit_words($description,$atts['limit_words']);
		$description .=$atts['addtext'];
	}
	 
	return $description;
}	

add_shortcode('download_description','download_description_function');

function limit_words($string, $word_limit)
{
	 
	$remove = array("\n","\n\n");	
	$words = str_replace($remove , " ", $string);
	$string = trim($string);
	
    $words = explode(" ",$words);
	foreach($words as $k=>$v)
	{
		if($v=='' || $v==' ')
			unset($words[$k]);
	}
	 
	$string_new = implode(" ", array_splice($words, 0, $word_limit));
	 
    $string = truncateHtml($string,strlen($string_new),'');
	 
	return $string;
	
}