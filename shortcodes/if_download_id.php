<?php 

function if_download_id_function($atts,$content)
{
	$atts = shortcode_atts( array(
		'id' => 'all',
		'equals'=>'',
		'greater'=>'',
		'less'=>'',
		'not'=>'no'
	), $atts, 'if_download_id' );
	 
	
	if($atts['id'] == 'all')
	{
		$download_id=get_the_ID();
		 
		if($atts['not']=='yes' || $atts['not']==1 )
			if(!eval_condition($download_id,$atts['equals'],$atts['greater'],$atts['less']))
				return do_shortcode($content);
			else
				return '';
		else
			if(eval_condition($download_id,$atts['equals'],$atts['greater'],$atts['less']))
				return do_shortcode($content);
			else
				return '';
		
		
	}
	else
	{
		if($atts['not']=='yes' || $atts['not']==1 )
		{
			$download_id=get_the_ID();
			 
			
			$id=explode(',',$atts['id']);
			if(!(in_array($download_id,$id) && eval_condition($download_id,$atts['equals'],$atts['greater'],$atts['less'])))
				return do_shortcode($content);
			else
				return '';
			
		}
		else
		{	
			$download_id=get_the_ID();
			 
			
			$id=explode(',',$atts['id']);
			if((in_array($download_id,$id) && eval_condition( $download_id,$atts['equals'],$atts['greater'],$atts['less'])))
				return do_shortcode($content);
			else
				return '';
		}
		
	}
	
		
	
}

add_shortcode('if_download_id','if_download_id_function');