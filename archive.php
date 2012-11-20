<?php 
get_header(); ?>
<div class="title-wrap">
<div class="title1">
  <h1>
  <?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', '' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', '' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', '' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', '' ); ?>
<?php endif; ?>
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
    
      <p><a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( 'BlogImage', array('class' => 'img-border1') );  ?>
        </a></p>
      <?php global $more; $more = 0; ?>
      <?php the_content('Read More &raquo;'); ?>
        <p class="postmetadata">
        <?php kaya_posted_on(); ?>
        , <?php echo "Posted in" ?>
        <?php the_category(', ') ?>
        ,
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
      </p>
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
