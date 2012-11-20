  // admin  jquery tabs
  jQuery.noConflict();
  jQuery(function() {
		jQuery("#slider").tabs();
		
		
		});
		// Get Current Option Tab Anchor
function get_anchor_id() {
	var $group = jQuery('#slider');
	
	$group.each(function() {
	jQuery(this).bind('click',function(){
		    $anchorid = jQuery('.ui-state-active').children('a').attr('href');
			jQuery("#hidden_anchor").val($anchorid);
		});
		
	});
} jQuery(function() {
	
		get_anchor_id();
		
		}); 
