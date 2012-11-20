<style>
	html { 
  		<?php
		$colorskin=get_option('colorskin');
		if ($colorskin) {						 
		echo 'background-color:'?><?php echo get_option('colorskin'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'background-color:';	?>	
		<?php } ?>
	} 
	
.mid-wrap, .mid-wrap-home{ 
 		<?php
		$body_bg_color=get_option('body_bg_color');
		if ($colorskin) {						 
		echo 'background-color:'?><?php echo get_option('body_bg_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'background-color:';	?>	
		<?php } ?>
	} 
		
	
	
.mid-wrap, .mid-wrap-home { 
  		<?php
		$body_font_color=get_option('body_font_color');
		if ($body_font_color) {						 
		echo 'color:'?><?php echo get_option('body_font_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:';	?>	
		<?php } ?>
	} 
	
	
.mid-wrap a:link, .mid-wrap a:visited, .mid-wrap-home a:link, .mid-wrap-home a:visited{ 
  		<?php
		$hyperlinkcolor=get_option('hyperlinkcolor');
		if ($hyperlinkcolor) {						 
		echo 'color:'?><?php echo get_option('hyperlinkcolor'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:';	?>	
		<?php } ?>
	} 
	
	
h1, h2, h3, h4, h5, h6 { 
  		<?php
		$title_color=get_option('title_color');
		if ($title_color) {						 
		echo 'color:'?><?php echo get_option('title_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:';	?>	
		<?php } ?>
	} 
	
	
.mid-wrap a:hover, a:active, .mid-wrap-home a:hover, a:active { 
  		<?php
		$hyperlinkcolor_hover=get_option('hyperlinkcolor_hover');
		if ($hyperlinkcolor_hover) {						 
		echo 'color:'?><?php echo get_option('hyperlinkcolor_hover'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:';	?>	
		<?php } ?>
	} 
		

.jqueryslidemenu a:link, .jqueryslidemenu a:visited{

	<?php
		$topmenu_links_color=get_option('topmenu_links_color');
		if ($topmenu_links_color) {						 
		echo 'color:'?><?php echo get_option('topmenu_links_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:;';	?>	
		<?php } ?>
}

.jqueryslidemenu ul li ul li a:link, .jqueryslidemenu ul li ul li a:visited{

	<?php
		$topmenu_sub_links_color=get_option('topmenu_sub_links_color');
		if ($topmenu_sub_links_color) {						 
		echo 'color:'?><?php echo get_option('topmenu_sub_links_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:;';	?>	
		<?php } ?>
}

.jqueryslidemenu ul li ul li a:hover{

	<?php
		$topmenu_sub_links_color_hover=get_option('topmenu_sub_links_color_hover');
		if ($topmenu_sub_links_color_hover) {						 
		echo 'color:'?><?php echo get_option('topmenu_sub_links_color_hover'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:;';	?>	
		<?php } ?>
}


.footer, #footer-links ul li a{
	<?php
		$footerFont_color=get_option('footerFont_color');
		if ($footerFont_color) {						 
		echo 'color:'?><?php echo get_option('footerFont_color'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:;';	?>	
		<?php } ?>
}
#footer-links ul li a:hover{
	<?php
		$footerFont_color_ho=get_option('footerFont_color_ho');
		if ($footerFont_color_ho) {						 
		echo 'color:'?><?php echo get_option('footerFont_color_ho'); ?>!important;';
		<?php												
		} else { ?>     
		<?php echo 'color:;';	?>	
		<?php } ?>
}

</style>