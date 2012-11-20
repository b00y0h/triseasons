<?php get_header(); ?>
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
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="entry-title">
        <?php the_title(); ?>
      </h2>
      <div class="entry-meta">
        <?php kaya_posted_on(); ?>
      </div>
      <!-- .entry-meta -->
      <br />
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'kaya' ), 'after' => '</div>' ) ); ?>
      </div>
      <!-- .entry-content -->
      <?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
      <div id="entry-author-info">
        <div id="author-avatar"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'kaya_author_bio_avatar_size', 60 ) ); ?> </div>
        <!-- #author-avatar -->
        <div id="author-description">
          <h2><?php printf( esc_attr__( 'About %s', 'kaya' ), get_the_author() ); ?></h2>
          <?php the_author_meta( 'description' ); ?>
          <div id="author-link"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'kaya' ), get_the_author() ); ?> </a> </div>
          <!-- #author-link	-->
        </div>
        <!-- #author-description -->
      </div>
      <!-- #entry-author-info -->
      <?php endif; ?>
    </div>
    <!-- #post-## -->
    <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_sidebar('blog'); ?>
</div>
</div>
<?php get_footer(); ?>
