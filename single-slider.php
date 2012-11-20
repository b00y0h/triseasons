<?php 

get_header(); ?>
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
    
<div class="grid8 first">
  <div class="content-column">

    <?php 
		while (have_posts()) : the_post(); ?>
    <div class="post">
        
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
