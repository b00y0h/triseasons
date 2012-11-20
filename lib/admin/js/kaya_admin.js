function admin_menu_ui_tabs() {
	if(jQuery("#tabs").length){
	    var $url=window.location;
	    var $anchor2=$url.hash.substring(1);

		jQuery('.group').each(function(i) {
			$anchor = jQuery(this).attr("id");
			if($anchor == $anchor2){$active = i+2;$active_tab = i+1;}
			if(!$anchor2){$active = 2;$active_tab = 1;}
		});
	
		jQuery('.group').hide();
		jQuery('.group:nth-child('+$active+')').fadeIn();
	
		jQuery('#tabs li:nth-child('+$active_tab+')').addClass('ui-tabs-selected');
		jQuery('#tabs li a').click(function(evt){
	
			jQuery('#tabs li').removeClass('ui-tabs-selected');
			jQuery(this).parent().addClass('ui-tabs-selected');
		
			var clicked_group = jQuery(this).attr('href');
			jQuery('.group').hide();
				jQuery(clicked_group).fadeIn();
				evt.preventDefault();
		});
	}
	
}
     $(document).ready(function () {
	 		var wrap = jQuery(".color");

		wrap.each(function() {
			var name = field.attr("name");
 $('#' + name ).bind('colorpicked', function () {
        })
		      });
			  })