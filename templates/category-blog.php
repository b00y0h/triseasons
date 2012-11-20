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
      <h3> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" >
        <?php the_title(); ?>
        </a></h3>
     <p class="postmetadata">
        <?php kaya_posted_on(); ?>
        , <?php echo "Posted in" ?>
        <?php the_category(', ') ?>
        ,
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
      </p>
      <p><a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( 'BlogImage', array('class' => 'img-border1') );  ?>
        </a></p>
      <?php global $more; $more = 0; ?> 
      <?php the_content('<span class="view-more-blog">Read More</span>'); ?>
       
      <div class="divider-small"></div>
    </div>
    <?php endwhile; ?>
    <div class="clear">&nbsp;</div>
    <?php if(function_exists('kaya_pagination')) { kaya_pagination(); } ?>
      <div class="clear">&nbsp;</div>
  </div>
</div>
<?php get_sidebar('blog'); ?>
</div>
</div>
<?php get_footer(); ?>
