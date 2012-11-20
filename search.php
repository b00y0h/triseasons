<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="title-wrap">
<div class="title1">
  <h1>
<h2 class="pagetitle">Search Results</h2>
  </h1>
</div>
</div>
<!-- ========================= end container ================================ -->

<div class="mid-wrap">
    <div class="container">
    
<div class="grid8 first">
  <div class="content-column">
    <?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>
    <div class="post"> 
    <div <?php post_class() ?>>
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a></h3>
        <?php the_content('<span class="view-more-small">Read More</span>'); ?>
      </div>
    </div>
 
    <?php endwhile; ?>
    <div class="clear">&nbsp;</div>
    <?php if(function_exists('kaya_pagination')) { kaya_pagination(); } ?>
      <div class="clear">&nbsp;</div>
    <?php else : ?>
    <h2 class="center">No posts found. Try a different search?</h2>
    <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
