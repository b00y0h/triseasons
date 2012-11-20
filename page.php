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
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="entry">
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<!-- ========================= end mid-wrap ================================ -->
<?php get_footer(); ?>
