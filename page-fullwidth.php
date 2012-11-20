
<?php get_header();
/* Template Name: Full width page */
 ?>
 <script type="text/javascript">
		$j(document).ready(function(){				
				$j('.grid12 .homebox:nth-child(3n+3)').addClass("nopadding");
			});
		</script>
<div class="title-wrap">
<div class="title1">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>
</div>
<!-- ========================= end container ================================ -->

<div class="mid-wrap">
    <div class="container">
<div class="grid12 first" id="full-width">

    		
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
               <div class="entry">

			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    
                </div>
                
         
     <?php endwhile; endif; ?>
            
         
        
</div>
</div>
</div>
<?php get_footer(); ?>


