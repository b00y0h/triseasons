<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 Template Name: Archives
 */

get_header();
?>

<div class="title">
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
  <?php get_search_form(); ?>
  <br />
  <div class="one-half archieves">
    <h3>Archives by Subject:</h3>
    <ul class="ul">
      <?php wp_list_categories('&title_li='); ?>
    </ul>
    <!--end content column-->
  </div>
  <div class="one-half-last">
    <h3>Archives by Month:</h3>
    <ul class="ul">
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <!--end content column-->
  </div>
</div>
<div class="clear">&nbsp;</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
