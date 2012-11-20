<?php
	add_action('init', 'create_slider');
	function create_slider() {
    	$slider_args = array(
        	'label' => __('Kaya Slider'),
			
        	'singular_label' => __('slider'),
			'new_item' => __( 'Home Page Slider' ),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
				'menu_icon' => get_stylesheet_directory_uri() . '/images/kaya_slider.png',
				
				'supports' => array('title','editor','thumbnail')

        );
    	register_post_type('slider',$slider_args);
	}	

	add_action("admin_init", "add_slider");
	add_action('save_post', 'update_kaya_slideurl');
	function add_slider(){
		add_meta_box("sliderurl_details", "Add a link to slider Image like bellow example. ", "sliderlink_options", "slider", "normal", "low")	;
	}
	function sliderlink_options(){
		global $post;
		$custom = get_post_custom($post->ID);
		$kaya_slideurl = $custom["kaya_slideurl"][0];
?>
	<div id="portfolio-options">
		<input name="kaya_slideurl" size="55" value="<?php echo $kaya_slideurl; ?>" /> <br />
        <p><em>Ex: http://www.domain.com/pagename</em></p>
        		
	</div><!--end portfolio-options-->   
<?php
	}
	function update_kaya_slideurl(){
		global $post;
		if($_POST["kaya_slideurl"])
		{
		update_post_meta($post->ID, "kaya_slideurl", $_POST["kaya_slideurl"]);
		}
	}
?>