<?php get_header(); ?>
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
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'scope' ), 'after' => '</div>' ) ); ?>
      </div>
      <!-- .entry-content -->
    </div>
    <!-- #post-## -->
    <?php // <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
