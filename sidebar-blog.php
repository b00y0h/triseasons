
 <!-- ====================== sidebar ========================== -->
   <div class="grid4" id="sidebar">
       <span class="sidebar-arrow-up"></span>
   		<div class="sidebar">
	<ul>
    
    <?php //Default sidebar widget area
    if ( ! dynamic_sidebar( 'Sidebar Blog' ) ) : ?>
 <?php if(get_option("news_sections") != "true") { ?>
	<li class="widget-container"> <?php require('lib/includes/latest-news.php'); ?> </li>
    <?php } ?>
  
		<li class="widget-container">
        	<h3>Text widget sample</h3>
         	<p> This is sample widget text which  is displayed if you do not add any widgets to the "<strong>Sidebar Blog</strong>", it is disappeared once you add content to the "Sidebar Blog" widget from wordpress dash board.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla est purus, vestibulum in fermentum quis, iaculis vel nisl.</p>
			
		</li>

 
    <?php endif; // end Default sidebar area ?>
	</ul>
</div>
<span class="sidebar-arrow-down"></span>
</div>
<div class="clear">&nbsp;</div>

