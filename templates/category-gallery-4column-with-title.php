<?php 
get_header(); ?>
<script type="text/javascript" src="<?php echo bloginfo('template_url')?>/js/jquery.prettyPhoto.js"></script>
<link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<script>  
	   $j(document).ready(function() {	
	 	   $j('.gallery li:nth-child(4n)').addClass("last");
		   $j(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
});

</script>

<div class="title-wrap">
<div class="title1">
  <h1>
   <?php single_cat_title();?>
  </h1>
</div>
</div>
<!-- ========================= end container ================================ -->

<div class="mid-wrap">
    <div class="container">
<div class="grid12 first">
  <ul class="gallery">
    <?php while (have_posts()): the_post(); ?>
    <li  class="column4">
      <?php						
			$video = get_post_meta( get_the_ID(), 'Video', true );			
			
			if($video)
			{
			if ( !empty( $video ) ) {
				echo '<a href="' . $video . '" rel="prettyPhoto[mixed]">';
				the_post_thumbnail( 'column4-img', array('class' => 'img-border1') );
				echo '</a>';
			}
			}else{
			$thumb_id = get_post_thumbnail_id();
			
				if ( !empty( $thumb_id ) ) {
					$url = wp_get_attachment_image_src( $thumb_id, 'large' );
			
					echo '<a href="' . $url[0] . '" rel="prettyPhoto[mixed]">';
					the_post_thumbnail( 'column4-img', array('class' => 'img-border1') );
					echo '</a>';
				}
			}
								
			?> <br />
            <center> <?php the_title(); ?> </center>
    </li>
     
    <?php endwhile; ?>
  </ul>
  <div class="clear">&nbsp;</div>
  <?php if(function_exists('kaya_pagination')) { kaya_pagination(); } ?>
    <div class="clear">&nbsp;</div>
</div>
</div>
</div>
<!-- ========================= end mid-wrap ================================ -->
<?php get_footer(); ?>
