<?php

//short code for services pages =========================================

function kaya_services ($atts, $content = null) { 
	extract(shortcode_atts(array(
        'icon'      => '',
        'title'      => '',
        'info'      => '',
    ), $atts));
	
	$out .= '<div class="servicesbox">';
	$out .= '<div class="servicesicon"><img src="' .$icon. '" alt="" width="128" height="128" class="alignleft" /></div>';
	$out .= '<div class="servicestext"><h3>' .$title. '<span>' .$info. '</span></h3>';	
	$out .= do_shortcode($content);
	$out .= '</div>';
	$out .= '</div>';
	
   return $out;
}

add_shortcode('services','kaya_services');

?>