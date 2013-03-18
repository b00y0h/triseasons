<?php
define('KAYA_LIB', TEMPLATEPATH . '/lib');
define('KAYA_ADMIN', KAYA_LIB . '/admin');
define('KAYA_FUNCTIONS', KAYA_LIB . '/functions');
define('KAYA_WIDGETS', KAYA_LIB . '/functions/widgets');
define('KAYA_SHORTCODES', KAYA_LIB . '/functions/shortcodes');
define('KAYA_INCLUDES', KAYA_LIB . '/includes');
define('KAYA_THEME_JS', get_template_directory_uri() . '/js');
define('KAYA_ADMIN_JS', get_template_directory_uri() . '/lib/admin/js');

require_once(KAYA_INCLUDES . '/header_loads.php');

require_once(KAYA_FUNCTIONS . '/kaya_pagination.php');
require_once(KAYA_FUNCTIONS . '/kaya_slider.php');
require_once(KAYA_FUNCTIONS . '/kaya_comments.php');

//require_once(KAYA_SHORTCODES . '/kaya_shortcodes.php');
require_once(KAYA_SHORTCODES . '/kaya_general.php');
require_once(KAYA_SHORTCODES . '/kaya_home.php');
require_once(KAYA_SHORTCODES . '/kaya_services.php');
require_once(KAYA_SHORTCODES . '/kaya_testimonial.php');
require_once(KAYA_SHORTCODES . '/kaya_socialicons.php');

require_once(KAYA_WIDGETS . '/kaya_contactinfo.php');
require_once(KAYA_WIDGETS . '/widgets.php');

// Load admin Options
require_once(KAYA_ADMIN . '/kaya_options.php');


add_filter('widget_text','do_shortcode');

// This allow ristrict to generate p tag while creting page/post
remove_filter( 'the_content', 'wpautop' );

// It removes WordPress version number in the header
//remove_action('wp_head', 'wp_generator');

// This theme allows users to set a custom background
	add_custom_background();

// This theme menu supports
	add_theme_support( 'nav-menus' );

// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation' ),
		'secondary' => __( 'Secondary Navigation' )
	) );

// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );



add_action( 'init', 'my_register_image_sizes' );

function my_register_image_sizes() {
	add_image_size( 'slider', 392, 274, true );
	add_image_size( 'column4-img', 209, 150, true );
	add_image_size( 'column3-img', 290, 180, true );
	add_image_size( 'column2-img', 456, 250, true );
	add_image_size( 'BlogImage', 625, 250, true );
	add_image_size( 'PortfolioImage3', 285, 500, true );
	add_image_size( 'SliderImage', 362, 182, true );
	add_image_size( 'thumbs1', 260, 105, true );
	add_image_size( 'GalleryImage', 285, 205, true );
	add_image_size( 'GalleryImage2', 435, 250, true );
	add_image_size( 'icon1', 70, 70, true );
	add_image_size( 'icon2', 50, 50, true );
}


function get_custom_field_value($key, $print = false) {
  global $post;
  $value = get_post_meta($post->ID, $key, true);
  if ( $print == false ) return $value; else echo $value;
}
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

// Admin interface starts ======================================================================================

function mytheme_add_admin() {

global $themename, $shortname, $options;


if ( $_GET['page'] == basename(__FILE__) ) {

	if ( 'save' == $_REQUEST['action'] ) {
  $hidden_anchor = $_REQUEST['hidden_anchor'];
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

	header("Location: admin.php?page=functions.php&saved=true$hidden_anchor");
die;

}
else if( 'reset' == $_REQUEST['action'] ) {

	foreach ($options as $value) {
		delete_option( $value['id'] ); }

	header("Location: admin.php?page=functions.php&reset=true");
die;

}
}

add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/lib/admin/css/jquery-ui.css", false, "1.0", "all");
wp_enqueue_style("options", $file_dir."/lib/admin/css/options.css", false, "1.0", "all");
wp_enqueue_script('thickbox');
wp_enqueue_style('thickbox');
wp_enqueue_script( 'jquery-ui-tabs' );
//wp_enqueue_script("jquery_umin", $file_dir."/kaya_admin/js/jquery-ui.min.js", false, "1.0");
}

// used for image path in js file end

function mytheme_admin() {
 global $themename, $shortname, $options;
$i=0;

if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<?php $file_dir=get_bloginfo('template_directory'); ?>
<h2><?php echo $themename; ?> Settings</h2>
<div  id="slider" class="wrap">
<ul id="tabs">
    <li><a href="#General"><span>General</span></a></li>
    <li><a href="#Slider"><span>Slider</span></a></li>
    <li><a href="#Homepage"><span>Frontpage</span></a></li>
    <li><a href="#sidebar"><span>sidebar</span></a></li>
    <li><a href="#Footer"><span>Footer</span></a></li>
    <li><a href="#customskin"><span>Custom Skin</span></a> </li>
</ul>
<form method="post">
<input id="hidden_anchor" type="hidden" name="hidden_anchor" value="" />
 <?php
 require_once(KAYA_INCLUDES . '/theme_options_fields.php');
}
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
if ($_GET['activated']){
    wp_redirect(admin_url("themes.php?page=functions.php"));
}
?>

<?php
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


function my_theme_wrapper_start() { ?>
<div class="mid-wrap">
    <div class="container">
<div class="grid12 first" id="full-width">
<?php }

function my_theme_wrapper_end() { ?>
</div>
</div>
</div>

<?php }