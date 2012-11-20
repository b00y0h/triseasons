<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
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
    <div class="entry">
      <h2 class="center">Error 404 - Not Found</h2>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
