<?php 

function download_add_to_cart_function($atts,$content)
{
	
	$atts = shortcode_atts( array(
		'id' => '',
		'style'=>'button',
		'option'=>'',
		'price'=>'1',
		'text'=>'Add to Cart',
		'color'=>'',
		'class'=>'',
		'direct'=>'',
		'show'=>''
		
	), $atts, 'download_url_addtocart' ); 
	if($atts['id']!='')
		$download_id = $atts['id'];
	else
		$download_id = get_the_ID();
	 
	global $post,$download_loop,$current_price,$global_checkout_price_id;
		
	$external = get_post_meta($download_id,'_edd_external_url',true); 
	
	if(isset($external) && $external!='' && $atts['show']!='button')
		return $external;
	
	if(isset($global_checkout_price_id) && $global_checkout_price_id!='' && $global_checkout_price_id != null )
	{
		$price_id = $global_checkout_price_id;
		 
	}
	else if(isset($current_price) && $current_price != '' && $current_price != null )
	{
		 
		$price_id = $current_price['price_id'];
	}
	else
	{
		if( edd_has_variable_prices( $download_id ) ) 
			$price_id = edd_get_default_variable_price($download_id);
	}		

	if($atts['option']>0)
	{
		$price_list_temp = edd_get_variable_prices( $download_id );
		if (array_key_exists($atts['option'], $price_list_temp)) {
			$price_id = $atts['option'];
		}
		 
	}
			
	
	if(edd_has_variable_prices( $download_id ) && $atts['option']!='list')
	{
		if($atts['show']!='url')
		{ 
			
			
			$content =  '[purchase_link class="blue edd-submit '.$atts['class'].'" color="'.$atts['color'].'" direct="'.$atts['direct'].'" price="'.$atts['price'].'"  text="'.$atts['text'].'" id="'.$download_id.'" price_id="'.$price_id.'" style="'.$atts['style'].'" ]';
			return do_shortcode($content);
		}
		else
		{
			return site_url()."?edd_action=add_to_cart&download_id=$download_id&edd_options[price_id]=$price_id";
		}
			 
			
	}
	else
		if($atts['show']!='url')
			return do_shortcode('[purchase_link  class=" blue edd-submit '.$atts['class'].'" color="'.$atts['color'].'" direct="'.$atts['direct'].'" price="'.$atts['price'].'"  text="'.$atts['text'].'" id="'.$download_id.'"  style="'.$atts['style'].'" ]');
		else
			return site_url()."?edd_action=add_to_cart&download_id=$download_id";

}

add_shortcode('download_url_addtocart','download_add_to_cart_function');