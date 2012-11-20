
<div id="footer-wrap">
	<div class="container">
		<?php
global $post;
if ( is_home() ) {?>
		<?php if(get_option("freequotes_sections_home") != "true") { ?>
		<div class="quote">
			<?php
					   $FreeQuoteText=get_option('FreeQuoteText');
						if ($FreeQuoteText) {
							echo '<h3>';
					echo stripslashes($FreeQuoteText);
						echo '</h3>';
						} else { ?>
			<h3>TriSeasons Medical practice offers members 24 hour access, retain their medical records, and coordinate care with their at-home physician.  </h3>
			<?php } ?>
			<a href="<?php echo get_option('FreeQuoteTextButtonLink'); ?>" class="quote-but">
			<?php

					   $FreeQuoteTextButtonText=get_option('FreeQuoteTextButtonText');
						if ($FreeQuoteTextButtonText) {

					echo stripslashes($FreeQuoteTextButtonText);

						} else { ?>
			Get in Touch
			<?php } ?>
			</a> </div>
		<?php } ?>
		<?php
} else {?>
		<?php if(get_option("freequotes_sections") != "true") { ?>
		<div class="quote">
			<?php
					   $FreeQuoteText=get_option('FreeQuoteText');
						if ($FreeQuoteText) {
							echo '<h3>';
					echo stripslashes($FreeQuoteText);
						echo '</h3>';
						} else { ?>
            <h3>TriSeasons Medical practice offers members 24 hour access, retain their medical records, and coordinate care with their at-home physician.  </h3>
			<?php } ?>
			<a href="<?php echo get_option('FreeQuoteTextButtonLink'); ?>" class="quote-but">
			<?php

					   $FreeQuoteTextButtonText=get_option('FreeQuoteTextButtonText');
						if ($FreeQuoteTextButtonText) {

					echo stripslashes($FreeQuoteTextButtonText);

						} else { ?>
			Get in Touch
			<?php } ?>
			</a> </div>
		<?php } ?>
		<?php } ?>
		<!-- ==================== footer ========================== -->
		<div class="footer-columns">
			<div class="column4">
				<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer Column 1') ) : ?>
				<h3>Column 1</h3>
				<p>Fusce sit amet porttitor leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque interdum, nulla sit amet varius dignissim, justo nibh lobortis urna, commodo vehicula sem tellus non quam. Vestibulum pretium risus eget tellus blandit mollis. <a href="#"> View More &raquo;</a></p>
				<?php endif; ?>
			</div>
			<div class="column4">
				<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer Column 2') ) : ?>
				<h3>Column 2</h3>
				<p>Cewsit amet porttitor leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque interdum, nulla sit amet varius dignissim, justo nibh lobortis urna, commodo vehicula sem tellus non quam. Vestibulum pretium risus eget tellus blandit mollis. <a href="#"> View More &raquo;</a></p>
				<?php endif; ?>
			</div>
			<div class="column4">
				<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer Column 3') ) : ?>
				<h3>Column 3</h3>
				<p>Wesce sit amet porttitor leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque interdum, nulla sit amet varius dignissim, justo nibh lobortis urna, commodo vehicula sem tellus non quam. Vestibulum pretium risus eget tellus blandit mollis. <a href="#"> View More &raquo;</a></p>
				<?php endif; ?>
			</div>
			<div class="column4 last">
				<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer Column 4') ) : ?>
				<h3>Column 3</h3>
				<p>Wesce sit amet porttitor leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque interdum, nulla sit amet varius dignissim, justo nibh lobortis urna, commodo vehicula sem tellus non quam. Vestibulum pretium risus eget tellus blandit mollis. <a href="#"> View More &raquo;</a></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="footer">
			<div class="grid6 first">
				<?php
					   $footer=get_option('footer');
						if ($footer) {
						echo ' <p class="copyrights">';
						 echo stripslashes($footer);
						echo '</p>';
						} else { ?>
				<p> Copyright &copy;  2010  www.yourdomain.com, all rights reserved. </p>
				<?php } ?>
			</div>
			<div class="grid6">
				<?php  wp_nav_menu( array('theme_location'  => 'secondary', 'menu' => 'footermenu','container_id' => 'footer-links') ); ?>
			</div>
			<div class="clearfix">&nbsp;</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php
					   $kaya_google_analytics=get_option('kaya_google_analytics');
						if ($kaya_google_analytics) {
					echo stripslashes($kaya_google_analytics);
						} else { ?>
<?php } ?>
</body></html>