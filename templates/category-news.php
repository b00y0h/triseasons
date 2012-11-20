<?php 
get_header(); ?>
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
    
<div class="grid8 first">
  <div class="content-column">
    <?php 
		while (have_posts()) : the_post(); ?>
    <div class="post">
    <h2> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" ><?php the_title(); ?> </a></h2> 
                
       			 <p><?php the_time('l, F jS, Y') ?></p>
                  

      <p><a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( 'BlogImage', array('class' => 'img-border1') );  ?>
        </a></p>
      <?php global $more; $more = 0; ?>
      <?php the_content('Read More &raquo;'); ?>

      <div class="divider-small"></div>
    </div>
    <?php endwhile; ?>
    <div class="clear">&nbsp;</div>
    <?php if(function_exists('kaya_pagination')) { kaya_pagination(); } ?>
      <div class="clear">&nbsp;</div>
  </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
