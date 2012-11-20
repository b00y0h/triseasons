<?php

//short code for home page boxes
function kaya_homebox ($atts, $content = null) { 
	extract(shortcode_atts(array(
        'icon'      => '',
        'title'      => '',
        'info'      => '',
    ), $atts));
	
	$out .= '<div class="homebox">';
	$out .= '<div class="homeboxicon"><img src="' .$icon. '" alt="" width="48" height="48" class="alignleft" /></div>';
	$out .= '<div class="homeboxtext"><h3>' .$title. '<span>' .$info. '</span></h3>';
	$out .= '<p>';
	$out .= do_shortcode($content);
	$out .= '</p></div>';
	$out .= '</div>';
	
   return $out;
}
add_shortcode('homebox','kaya_homebox');

?>