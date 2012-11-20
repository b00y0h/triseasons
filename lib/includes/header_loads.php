<?php
/// juqery and css loads
function admin_enqueue_scripts()
{
if(is_admin())
{

wp_enqueue_script("jquery_mcolor", get_bloginfo('template_directory')."/lib/admin/js/mColorPicker.js", false, "1.0");
wp_enqueue_script("jquerympty", get_bloginfo('template_directory')."/lib/admin/js/empty.js");
wp_localize_script( 'jquerympty', 'jquerymcolor', array(
			'colorimages' => get_bloginfo('template_directory') . '/lib/admin/images/',
			'menuarrow' => get_bloginfo('template_directory') . '/images/'
			
	));
	if(is_admin())
{
// used for image path in js file

wp_enqueue_script( 'jquery-custom', KAYA_ADMIN_JS .'/admin_custom.js');
}
	}
}
add_action('wp_print_scripts', 'admin_enqueue_scripts');
function kaya_jquery_scripts()
{

if(!is_admin())
{
wp_enqueue_script("jquery");
//wp_enqueue_script( 'jquery-ui-tabs' );
//wp_enqueue_script( 'jquery-easing', KAYA_THEME_JS .'/jquery.easing.1.1.1.js');
wp_enqueue_script( 'jquery-cufon', KAYA_THEME_JS .'/cufon.js');	
wp_enqueue_script( 'jquery-District', KAYA_THEME_JS .'/District_100.font.js');

wp_enqueue_script( 'jquery-tools', KAYA_THEME_JS .'/jquery.tools.min.js');
wp_enqueue_script( 'jquery-custom', KAYA_THEME_JS .'/custom.js');
if(is_home())
{
wp_enqueue_script( 'jquery-cysleslider', KAYA_THEME_JS .'/jquery.cycle.all.2.72.js');
wp_enqueue_script( 'jquery-cycleslider', KAYA_THEME_JS .'/cycleslider.js');
}
}
}
add_action('wp_print_scripts', 'kaya_jquery_scripts');
function kaya_style_css()
{
if(!is_admin()){
		wp_enqueue_style('css_reset', get_template_directory_uri() . '/css/reset.css', false, '3.0', 'all');
		wp_enqueue_style('css_layout', get_template_directory_uri() . '/css/layout.css', false, '3.0', 'all');		
		wp_enqueue_style('css_jqueryslidemenu', get_template_directory_uri() . '/css/jqueryslidemenu.css', false, '3.0', 'all');
		//wp_enqueue_style('css_jqueryPrettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', false, '3.0', 'all');
		wp_enqueue_style('css_shortcodes', get_template_directory_uri() . '/css/shortcodes.css', false, '3.0', 'all');
		wp_enqueue_style('css_cycle', get_template_directory_uri() . '/css/cycle.css', false, '3.0', 'all');

		}
		}
		add_action('init', 'kaya_style_css');
?>