<?php get_header(); ?>
<?php require('lib/includes/frontpage-slider.php'); ?>

<div class="mid-wrap-home">
    <div class="container">
        <div class="grid12 first">
            <?php query_posts('page_id='.get_option('FrontPageTeaserBoxesColumn1'));	
                            while (have_posts()) : the_post(); ?>
            <h1 class="frontpage-title">
                <?php the_title(); ?>
            </h1>
            <?php global $more; $more = 0; ?>
            <?php the_content('<span class="read-more">&nbsp;</span>'); ?>
            <?php endwhile; ?>
            <?php   wp_reset_query();  ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
