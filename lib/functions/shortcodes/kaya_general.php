<?php

// SHORT CODE BEGINS *****************************************************
function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);
add_filter('widget_text', 'my_formatter', 99);


// CLEAR  *****************************************************
function clear_shortcode( $atts, $content = null) {
   return '<div class="clear">' . $content . '</div>';}
   add_shortcode('clear', 'clear_shortcode');
   
// DIVIDER  *****************************************************
function divider_shortcode( $atts, $content = null) {
   return '<div class="divider">' . $content . '</div>';}
   add_shortcode('divider', 'divider_shortcode');
   
   
/*** ROUNDED BUTTONS SMALL
------------------------------*/

function kaya_button_small( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'url'      => '#',
        'target'      => '_self',
	    'color'      => 'small-blue',
		
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"button-small" ." " .$color."\">" .do_shortcode($content). "</a>";
    return $out;
}
add_shortcode('button_small', 'kaya_button_small');


/*** ROUNDED BUTTONS BIG
------------------------------*/

function kaya_button_big( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'url'      => '#',
        'target'      => '_self',
	    'color'      => 'big-blue',
		'desc'      => 'My Button Description',
		
    ), $atts));
	
	//$out = "<a href=\"" .$url. "\" "." target=\"" .$target. "\"class=\"button-big" ." " .$color."\">" .do_shortcode($content). "</a>";
	
	$out = "<a href=\" " .$url. "\" "." target=\"".$target."\"" . " ". "class=\"button-big "  .$color ."\"" . ">"  .do_shortcode($content). "<br>"." <em> ".$desc." </em>". " </a>";
	
	return $out;
}
add_shortcode('button_big', 'kaya_button_big'); 



// COLUMN 5 *****************************************************

function announcement_shortcode( $atts, $content = null) {
   return '<div class="announcement">' . $content . '</div>'; }
   add_shortcode('announcement', 'announcement_shortcode');
   
   
// COLUMN 5 *****************************************************
 function column5_shortcode( $atts, $content = null) {
   return '<div class="column5">' . $content . '</div>';}
   add_shortcode('column5', 'column5_shortcode');
   
 function column5_last_shortcode( $atts, $content = null) {
   return '<div class="column5_last">' . $content . '</div>';}
   add_shortcode('column5_last', 'column5_last_shortcode');  
   
// COLUMN 5_4 *****************************************************
 function column5_4_shortcode( $atts, $content = null) {
   return '<div class="column5_4">' . $content . '</div>';}
   add_shortcode('column5_4', 'column5_4_shortcode');
   
// COLUMN 4 *****************************************************   
function column4_shortcode( $atts, $content = null) {
   return '<div class="column4">' . $content . '</div>';}
   add_shortcode('column4', 'column4_shortcode'); 
   
function column4_last_shortcode( $atts, $content = null) {
   return '<div class="column4_last">' . $content . '</div>';}
   add_shortcode('column4_last', 'column4_last_shortcode');  
   
   
// COLUMN 3 ***************************************************** 

function column3_shortcode( $atts, $content = null ) {
   return '<div class="column3">' . $content . '</div>';}
add_shortcode('column3', 'column3_shortcode');


function column3_last_shortcode( $atts, $content = null ) {
   return '<div class="column3_last">' . $content . '</div>';}
add_shortcode('column3_last', 'column3_last_shortcode');


// COLUMN 2 *****************************************************
function column2_shortcode( $atts, $content = null ) {
   return '<div class="column2">' . $content . '</div>';}
add_shortcode('column2', 'column2_shortcode');

function column2_last_shortcode( $atts, $content = null ) {
   return '<div class="column2_last">' . $content . '</div>';}
add_shortcode('column2_last', 'column2_last_shortcode');

// COLUMN 1 *****************************************************
function column1_shortcode( $atts, $content = null ) {
   return '<div class="column1">' . $content . '</div>';}
add_shortcode('column1', 'column1_shortcode');


// COLUMN 3_2 *****************************************************
function column3_2_shortcode( $atts, $content = null ) {
   return '<div class="column3_2">' . $content . '</div>';}
add_shortcode('column3_2', 'column3_2_shortcode');

// COLUMN 4_3 *****************************************************
function column4_3_shortcode( $atts, $content = null ) {
   return '<div class="column4_3">' . $content . '</div>';}
add_shortcode('column4_3', 'column4_3_shortcode');



//short code for quotes
function quotes( $atts, $content = null ) {
   return '<div class="quotes">' . $content . '</div>';}
add_shortcode('quotes', 'quotes');
//end short code for quotes


//short code for orderlist
function OrderedList( $atts, $content = null ) {
   return '<div class="OrderedList">' . $content . '</div>';}
add_shortcode('OrderedList', 'OrderedList');
//end short code for OrderedList

//short code for UnOrderlist
function UnOrderlist( $atts, $content = null ) {
   return '<div class="UnOrderlist">' . $content . '</div>';}
add_shortcode('UnOrderlist', 'UnOrderlist');
//end short code for OrderedList

//short code for messages

function alert( $atts, $content = null ) {
   return '<div class="alert-blue">' . $content . '</div>';}
add_shortcode('alert-blue', 'alert');

function sys_infobox_alert( $atts, $content = null ) {
   return '<span class="alert">' . do_shortcode($content) . '</span>';
}
add_shortcode('infobox_alert', 'sys_infobox_alert');


function warning( $atts, $content = null ) {
   return '<div class="alert-yellow">' . $content . '</div>';}
add_shortcode('alert-yellow', 'warning');

function success( $atts, $content = null ) {
   return '<div class="alert-green">' . $content . '</div>';}
add_shortcode('alert-green', 'success');

//short code for hilighted text
function hilight_yellow( $atts, $content = null ) {
   return '<span class="hilight-yellow">' . $content . '</span>';}
	add_shortcode('hilight-yellow', 'hilight_yellow');
	
function hilight_black( $atts, $content = null ) {
   return '<span class="hilight-black">' . $content . '</span>';}
   
	add_shortcode('hilight-black', 'hilight_black');
	
	
//short code for dropcap text	

	
function Kaya_dropcap( $atts, $content = null ) {
   return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}
add_shortcode('dropcap','Kaya_dropcap');

/*** TOGGLE
------------------------------*/
function kaya_shortcode_toggle_content( $atts, $content = null ) {
	extract(shortcode_atts(array(
        'heading'      => '',
    ), $atts));
	
	$out .= '<h2 class="trigger">' .$heading. '</h2>';
	$out .= '<div class="toggle_container" style="display: none;">';
	$out .= '<div class="block">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	$out .= '</div>';
	
   return $out;
}
add_shortcode('toggle_content', 'kaya_shortcode_toggle_content');
// tabs
function kaya_shortcode_tabs( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));
	
	
	
	$out .= '<ul class="tabs">';
	foreach ($atts as $tab) {
		$out .= '<li><a href="#">' .$tab. '</a></li>';
	}
	$out .= '</ul>';

	$out .= do_shortcode($content) .'<div class="clear"></div>';
	
	return $out;
	
}
add_shortcode('tabs', 'kaya_shortcode_tabs');
/*** TAB PANES
------------------------------*/
function tabpanes( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));
	
	$out .= '<div class="tab_content">' . do_shortcode($content) .'</div>';

	return $out;
}
add_shortcode('tab', 'tabpanes');

?>
