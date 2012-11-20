<?php
add_action( 'widgets_init', 'kaya_contactinfo' );

function kaya_contactinfo() {
	register_widget( 'kaya_contactinfo' );
}
class kaya_contactinfo extends WP_Widget {

	function kaya_contactinfo() {
global $themename;
		$widget_ops = array( 'classname' => 'kaya_contactinfo', 'description' => __('Add contactus u r sidebar  .', 'example') );
		$control_ops = array( 'width' => 350, 'height' => 350, 'id_base' => 'kaya_contactinfo' );


		$this->WP_Widget( 'kaya_contactinfo','Kaya Contact Info', $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );
	$contactinfo_title = strip_tags($instance['contactinfo_title']);
		$kaya_contact_name = $instance['kaya_contact_name'];
				$syscontact_phone = $instance['contactinfo_phone'];
	
		/* Our variables from the widget settings. */
			/* Before widget (defined by themes). */
$before_title='<h3>';
$after_title='</h3>';
$before_widget='<li>';
$after_widget='</li>';
?>
<?php echo $before_widget;?>
<?php echo $before_title.$contactinfo_title.$after_title; ?>
<?php
if($kaya_contact_name)
{
echo $kaya_contact_name;
}
if($syscontact_phone)
{
echo $syscontact_phone;
}
?>
<?php
	/* After widget (defined by themes). */
	echo $after_widget;
}
/**
 * Update the Contact Widget Settings.
 */
function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	/* Strip tags for title and name to remove HTML (important for text inputs). */
	$instance['contactinfo_title'] = strip_tags( $new_instance['contactinfo_title'] );
	$instance['kaya_contact_name'] = $new_instance['kaya_contact_name'];
	$instance['contactinfo_phone'] = $new_instance['contactinfo_phone'];
	
	
	return $instance;
	}
function form( $instance ) {
if( $instance['kaya_contact_name'] == "")
{
 $instance['kaya_contact_name']=
 "<div class='sidebar-contactinfo'>
<p class='phone'>  <span> 222-333-4444 </span>  </p>
<p class='fax'>   <span>222-333-5544  </span></p>
<p class='email'>  <span>info@youdomain.com  </span></p>
<p class='address'> <span> Noth East Block, Emarald House, USA. </span>  </p>				
</div>";
}

	/* Set up some default widget settings. */
 ?>
<!-- Contact Widget Input -->
<p>
<label for="<?php echo $this->get_field_id( 'contactinfo_title' ); ?>"><?php _e('Title:', 'example'); ?></label>
<input id="<?php echo $this->get_field_id( 'contactinfo_title' ); ?>" name="<?php echo $this->get_field_name( 'contactinfo_title' ); ?>" value="<?php echo $instance['contactinfo_title']; ?>" type="text" style="width:100%;" />
</p>
<p>
<textarea cols="45" rows="5" id="<?php echo $this->get_field_id( 'kaya_contact_name' ); ?>" name="<?php echo $this->get_field_name( 'kaya_contact_name' ); ?>"><?php echo $instance['kaya_contact_name']; ?></textarea>
</p>



<?php } } ?>