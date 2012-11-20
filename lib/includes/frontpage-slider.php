<!-- ====================== slider ========================== -->
<div class="container">
<div class="slider">
<?php 
$slidertype=get_option('slidertype');
	if( $slidertype == "video") 
	{
	?>
	 <div id="s4" class="pics">
	 <?php echo stripslashes(get_option('frontpage_video')); ?>
	 </div>
	
	<?php
	}else{
?>
  <div id="s4" class="pics">
  <?php  
	
			$loop = new WP_Query(array('post_type' => 'slider')); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if(get_post_meta($post->ID, 'kaya_slideurl', true)): ?>
    <a href="<?php echo get_post_meta( get_the_ID(), 'kaya_slideurl', true ); ?>">
    <?php the_post_thumbnail( 'slider' ); ?>
    </a>
    <?php else :?>
    <a href="<?php the_permalink() ?>">
    <?php the_post_thumbnail( 'slider' ); ?>
    </a>
    <?php endif; ?>	
    <?php endwhile; ?>
  </div>
  <div id="nav"> </div>
  <?php } ?>
  <div class="slider-text">
    <?php 
				 $HeaderText=get_option('HeaderText');
						if ($HeaderText) {						
					
						echo '<h1>';
						echo stripslashes($HeaderText); 				
						echo '</h1>';
						} else { ?>
    <h2>Creating category layouts super easy! </h2>
    <?php } ?>
    
    			 <?php 
				 
				  $HeaderTextDescription=get_option('HeaderTextDescription');
						if ($HeaderTextDescription) {
						echo '<p>';
					echo stripslashes($HeaderTextDescription); 	
						echo '</p>';
						} else { ?>
    			 <p>Now you can create diffirent category layouts easily and add to menus as like pages.</p>
  					  <?php } ?>
   
    
    		<a href="<?php echo get_option('HeaderViewMoreLink'); ?>" class="view-more"> 
    			    <?php 
					
					   $ViewMoreText=get_option('ViewMoreText');
						if ($ViewMoreText) {
						
					echo stripslashes($ViewMoreText); 	
						
						} else { ?>
    				  View Portfolio
  					  <?php } ?>
    
    </a> 
</div>
</div>

</div>
<!-- ====================== end slider ========================== -->