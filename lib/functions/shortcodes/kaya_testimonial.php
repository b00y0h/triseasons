<?php

//short code for services pages
function kaya_testimonial ($atts, $content = null) { 
	extract(shortcode_atts(array(
        'title'      => '',
        'author'      => '',
		'author_image' => '',
    ), $atts));
	
	$out .= '<div class="testimonial">';	
	$out .= '<div class="author_image"> <img src="'.$author_image.'" width="50" height="50" />';
	$out .= '</div>';
	$out .= '<div class="testimonial_body"> <p>';	
	$out .= '<h3>' .$title. '</h3>';
	$out .= do_shortcode($content);
	$out .= '<p><strong>' .$author. '</strong></p>';
	$out .= '</div>';
	

	$out .= '</div>';
   return $out;
}
add_shortcode('testimonial','kaya_testimonial');
?>