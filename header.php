<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<style>
.footer-columns{
	behavior: url(<?php echo bloginfo('template_url')?>/lib/PIE/PIE.php);	
}
</style>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php 
	$style=get_option('style');
	if ($style) { ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_url').'/css/'.$style; ?>.css" />
<?php 
	} else { ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php } ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script type="text/javascript" >
var arrowimages={down:['downarrowclass', '<?php echo bloginfo('template_url')?>/images/down.gif', 13], right:['rightarrowclass', '<?php echo bloginfo('template_url')?>/images/right.gif']}
</script>
<script type="text/javascript" src="<?php echo bloginfo('template_url')?>/js/jqueryslidemenu.js"></script>
<?php include (TEMPLATEPATH . "/lib/includes/custom-skin.php"); ?>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="grid3 first">
            <?php $logo=get_option('logo');		
					
					?>
            <div id="logo">
                <?php if($logo) { ?>
                <a href="<?php echo get_option('home'); ?>"> <img src="<?php echo get_option('logo'); ?>" alt="<?php the_title(); ?>"   /> </a>
                <?php }else{ ?>
                <a href="<?php echo get_option('home'); ?>"> <img src="<?php echo bloginfo('template_url')?>/images/logo.png" alt="<?php the_title(); ?>"   /> </a>
                <?php } ?>
            </div>
        </div>
        <div class="grid9">
            <div class="jqueryslidemenu">
                <?php  wp_nav_menu( array( 'menu' => 'topmenu','container_id' => 'myslidemenu') ); ?>
            </div>
        </div>
    </div>
    <!-- ====================== top header end ========================== -->
</div>
