<?php

//short code for home page boxes
function kaya_socialicons ($atts, $content = null) { 
	extract(shortcode_atts(array(
        'icon'      => '',
        'title'      => '',
        'link'      => '',
    ), $atts));	
	$out .= '<div class="social_icons">';
	$out .='<a  href='.$link.'><img src="'.$icon.'" alt="" width="16" height="16" class="alignleft1" /> </a>';
	$out .= '</div>';			
   return $out;
}
add_shortcode('social','kaya_socialicons');

?>