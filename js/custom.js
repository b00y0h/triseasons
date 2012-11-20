/* cufon font replacement code ============================================================= */ 
	
	Cufon.replace('h1,h2,h3,h4,h5,h6, .slider-text h1, .jqueryslidemenu ul:first > li > a1,',{	
				  
		 hover: true
		 });
/* general code ============================================================= */ 

	var $j = jQuery.noConflict();
	$j(function(){	
	$j('#myslidemenu ul > li').addClass("mainlinks");	
	$j('.jqueryslidemenu  ul > li > ul > li:nth-child(1)').addClass("no-border");
	$j('#footer-links  ul li:first').addClass("no-border");
	$j('.grid12 .homebox:nth-child(3n+4)').addClass("nopadding");
	 $j('.portfolio1 li:nth-child(4n)').addClass("last");
});
	
$j(document).ready(function(){
$j("ul.tabs").tabs("div > div.tab_content");
	});

/* front page slider code ============================================================= */ 

$j(document).ready(function(){
	
	$j(".toggle_container").hide();

	$j("h2.trigger").click(function(){
		$j(this).toggleClass("active").next().slideToggle("fast");
	});
});


/* prettyphot mouser video and image icon code ============================================================= */ 

$j(document).ready(function(){
	$j("a[rel^='prettyPhoto']").each(function() {	
		var $jimage = $j(this).contents("img");
			$jhoverclass = 'hover_video';

	if($j(this).attr('href').match(/(jpg|gif|jpeg|png|tif)/)) 
	$jhoverclass = 'hover_image';
		
	if ($jimage.length > 0)
	{	
		var $jhoverbg = $j("<span class='"+$jhoverclass+"'></span>").appendTo($j(this));
		
			$j(this).bind('mouseenter', function(){
			$jheight = $jimage.height();
			$jwidth = $jimage.width();
			$jpos =  $jimage.position();		
			$jhoverbg.css({height:$jheight, width:$jwidth, top:$jpos.top, left:$jpos.left});
		});
	}

});	

$j("a[rel^='prettyPhoto']").contents("img").hover(function() {
		$j(this).stop().animate({"opacity": "0.2"}, 400);
		},function() {
		$j(this).stop().animate({"opacity": "1"},400);
	});
});
