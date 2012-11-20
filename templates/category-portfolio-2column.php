<?php 
get_header(); ?>
<script type="text/javascript" src="<?php echo bloginfo('template_url')?>/js/jquery.prettyPhoto.js"></script>
<link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<script>  
	   $j(document).ready(function() {	 
	   $j('.portfolio2 li:nth-child(2n)').addClass("last");
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
      <ul class="portfolio2 gallery">
        <?php while (have_posts()): the_post(); ?>
        <li  class="column2">
          <p>
            <?php						
			$video = get_post_meta( get_the_ID(), 'Video', true );			
			
			if($video)
			{
			if ( !empty( $video ) ) {
				echo '<a href="' . $video . '" rel="prettyPhoto[mixed]">';
				the_post_thumbnail( 'column2-img', array('class' => 'img-border1') ); 
				echo '</a>';
			}
			}else{
			
			$thumb_id = get_post_thumbnail_id();
			
				if ( !empty( $thumb_id ) ) {
					$url = wp_get_attachment_image_src( $thumb_id, 'large' );	
					echo '<a href="' . $url[0] . '" rel="prettyPhoto[mixed]">';
					the_post_thumbnail( 'column2-img', array('class' => 'img-border1') ); 
					echo '</a>';
				}
			}
						
			?>
          </p>
          <h3>
            <?php the_title(); ?>
          </h3>
          <?php   the_content_rss('', TRUE, '', 20); ?>
          <a href="<?php the_permalink() ?>" class="view-more-small">View More </a>
          <div class="clear space-divider">&nbsp;</div>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="clear">&nbsp;</div>
      <?php if(function_exists('kaya_pagination')) { kaya_pagination(); } ?>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
