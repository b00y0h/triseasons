<?php
// meta box stats here ========================================================================================

$themename = "Clean Sure";

$shortname = "";

$cats_array = get_categories('hide_empty=0');

$pages_array = get_pages('hide_empty=0');

$dynamic_pages = array();

$dynamic_cats = array();



foreach ($pages_array as $pagg) {

	$dynamic_pages[$pagg->ID] = $pagg->post_title;

	$pages_ids[] = $pagg->ID;

}



foreach ($cats_array as $categs) {

	$dynamic_cats[$categs->cat_ID] = $categs->cat_name;

	$cats_ids[] = $categs->cat_ID;

}

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
// general section starat
array( "name" => "General",
	"type" => "section"),
	
array( "type" => "open"),
 
array("name" => __("Select Theme Colors", "Theme Colors"),
		"options" => array('defaultstyle', 'green-style', 'blue-style', 'purple-style','gray-style','darkgreen-style','red-style','brown-style','pink-style'),

			"desc" => "Choose which color skin you like for your theme",

		"id" => $shortname."style",

			"std" => "",

	     "type" => "select"),
		
	array(	"name" => "LOGO SETTINGS",

			"type" => "title"),	
			
				array(	"name" => "Image Logo URL",

			"desc" => "Enter the image logo absolute url path, <br> Ex:http://www.yourdomain.com/wp-content/themename/images/logo-name.png, default logo is displayed if it is empty. Note: Must be added image url path to display the image logo.",

			"id" => $shortname."logo",

			"std" => "",

	        "type" => "imgupload"),
			
array(

		"name" => "Disable News Section",

		"type" => "checkbox",

		"id" => $shortname."news_sections",

		"std" => "false",

		"desc" => "Check this box to disable the 'News Section' on the sidebar."

		),
		
			
	array(

		"name" => "Disable Free Quote Section for Inener pages Footer",

		"type" => "checkbox",

		"id" => $shortname."freequotes_sections",

		"std" => "false",

		"desc" => "Check this box to disable the 'Free Quotes Section' on the inner pages Footer."

		),
				
	array(

		"name" => "Disable Free Quote Section On Home page Footer",

		"type" => "checkbox",

		"id" => $shortname."freequotes_sections_home",

		"std" => "false",

		"desc" => "Check this box to disable the 'Free Quotes Section' on the Frontpage Footer."

		),
				

		
		
array( "type" => "submit"),	
	
array( "type" => "close"),

// Slider section start

array( "name" => "Slider",
	"type" => "section"),
array( "type" => "open"),


array("name" => __("Select Slider Type", "Select slider"),
		"options" => array('slider', 'video'),

			"desc" => "Select which you want to display on the front page slider, either video or images.",

		"id" => $shortname."slidertype",

			"std" => "",

	     "type" => "select"),

	array(	"name" => "Frontpage Video Url",
			"desc" => "Enter the front page Video URL, video sizes should be 392x274 <br>
			Ex: &lt;iframe src=&quot;http://player.vimeo.com/video/18665406&quot; width=&quot;392&quot; height=&quot;274&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;
			
			",
			"id" => $shortname."frontpage_video",
			"std" => "",
			"type" => "textarea"),

		
	array(	"name" => "Frontpage Header Title Text",
			"desc" => "Enter the front page header Title, Ex: Creating category layouts super easy!
			
			",
			"id" => $shortname."HeaderText",
			"std" => "",
			"type" => "textarea"),

array(	"name" => "Frontpage Header Title Description Text",
			"desc" => "Enter the front page header Title Description, Ex:Now you can create diffirent category layouts easily and add to menus as like pages.
			
			",
			"id" => $shortname."HeaderTextDescription",
			"std" => "",
			"type" => "textarea"),
			
			
			
array(	"name" => "Frontpage Header View More Button Text",
			"desc" => "Enter Header Button text,  <strong>View Portfolio</strong> is displayed if it is empty. ",
			"id" => $shortname."ViewMoreText",
			"std" => "",
			"type" => "text"),
			
			
			
array(	"name" => "Frontpage Header Text View More Button Link",
			"desc" => "Enter the Absolute url path for'Front page Header View More Button link. Ex: http://www.domain.com/buttonlink/",
			"id" => $shortname."HeaderViewMoreLink",
			"std" => "",
			"type" => "text"),
			
	
	


	array( "type" => "submit"),	

array( "type" => "close"),
//  Slider section closed



// home page section start

array( "name" => "Homepage",
	"type" => "section"),
array( "type" => "open"),


	array(	"name" => "Frontpage  Teaser Boxes ",

			"desc" => "Select the page you created for Frontpage Teaser Boxes , use the shortcode like bellow: <br>
			 [homebox icon='http://yourdomain.com/images/icon-name.png' title='Professional Photography' ]  content .... [/homebox]

			 ",

			"id" => $shortname."FrontPageTeaserBoxesColumn1",

			"std" => "1",

            "options" => $dynamic_pages,

			"type" => "multiful"),


	array( "type" => "submit"),	

array( "type" => "close"),
//  home section closed



// sidebar section
array( "name" => "sidebar",
	"type" => "section"),
array( "type" => "open"),
array(	"name" => "News Title ",
			"desc" => "Enter the title for 'News' for the siderbar.<br>",
			"id" => $shortname."LatestNewsTitle",
			"std" => "Recent News",
			"type" => "text"),
			
		array(	"name" => "News Category",
			"desc" => "Choose the category which you created for 'News'.",
			"id" => $shortname."LatestNews",
		   "std" => "",		
		   "options"=>$dynamic_cats,		
			"type" => "multiful"),
		
		array(	"name" => "News Category Post Limits",
			"desc" => "Enter the number of post for 'News' Category you want to display in sidebar, default is 2 .",
			"id" => $shortname."LatestNewspostlimit",
			"std" => "2",
			"type" => "text"),
			
array(	"name" => "News View More ",
			"desc" => "Enter the absolute url path for 'News View More link' <br>
			Ex: http://www.yourdomain.com/news/
			",
			"id" => $shortname."NewsViewMore",
			"std" => "",
			"type" => "text"),
			
	
	
			
array( "type" => "submit"),
array( "type" => "close"),
// sidebar close


// Footer  section 
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),

array(	"name" => "Frontpage Free Quote Text ",
			"desc" => "Enter the text for'Frontpage Free Quote Text .",
			"id" => $shortname."FreeQuoteText",
			"std" => "",
			"type" => "textarea"),
			
array(	"name" => "Frontpage Free Quote Button Text ",
			"desc" => "Enter the Link text for'Frontpage Free Quote Button, ex: Get in Touch, Contact etc.",
			"id" => $shortname."FreeQuoteTextButtonText",
			"std" => "",
			"type" => "text"),
			
			
array(	"name" => "Frontpage Free Quote Button Link",
			"desc" => "Enter the Absolute url path for'Frontpage Free Quote Text Button Link. Ex: http://www.domain.com/buttonlink/",
			"id" => $shortname."FreeQuoteTextButtonLink",
			"std" => "",
			"type" => "text"),
			
array(	"name" => "Footer Copyright",
			"desc" => "Place your  Footer Copyright Content, default 'www.yourdomain.com, all rights reserved.' is displayed if it is empty.",
			"id" => $shortname."footer",

			"std" => "",

			"type" => "textarea"),
			
		array(
			"type" => "textarea",
			"name" => "Google Analytics",
		    "desc" => "Paste your Google Analytics tracking code here, the code should be like this:  <br>
			
			<p>&lt;script type=&quot;text/javascript&quot;&gt;</p>
			<p> var _gaq = _gaq || [];<br />
			  _gaq.push(['_setAccount', 'UA-17668823-1']);<br />
			  _gaq.push(['_trackPageview']);</p>
			<p> (function() {<br />
			  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;<br />
			  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';<br />
			  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);<br />
			  })();</p>
			<p>&lt;/script&gt;</p>
			",
		    "id" => $shortname."kaya_google_analytics"),
			
			

 array( "type" => "submit"),	
array( "type" => "close"),

// color skin
array( "name" => "customskin",
	"type" => "section"),
	
array( "type" => "open"),

array( "name" => "Header and Footer",
	"type" => "submenu"),
			
array(	"name" => "Top header and footer / Background Color",
			"desc" => "Add <strong>Top header and Footer BG color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."colorskin",
			"std" => "",
			"type" => "color"),
			


array( "name" => "Middle Content Section",
	"type" => "submenu"),
array(	"name" => "Title colors",
			"desc" => "Add  <strong>Title color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."title_color",
			"std" => "",
			"type" => "color"),
			

					
array(	"name" => "Content Area Font Color",
			"desc" => "Add  <strong>Content Area font color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."body_font_color",
			"std" => "",
			"type" => "color"),
						
			
array(	"name" => "Hyperlink color / text links color ",
			"desc" => "Add  <strong>General Hyperlink color</strong>, Enter hexadecimal color code like this: #333333",
			"id" => $shortname."hyperlinkcolor",
			"std" => "",
			"type" => "color"),

array(	"name" => "hyperlink on mouse over color",
			"desc" => "Add  <strong>General Hyperlink Mouseover color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."hyperlinkcolor_hover",
			"std" => "",
			"type" => "color"),

	array( "name" => "Top Menu",
	"type" => "submenu"),

array(	"name" => "topmenu links color",

			"desc" => "Add color for <strong>topmenu main links</strong>, Enter hexadecimal color code like this: #333333",
			"id" => $shortname."topmenu_links_color",
			"std" => "",
			"type" => "color"),
					

array(	"name" => "topmenu Sub links color",
			"desc" => "Add color for <strong>topmenu sublinks</strong>, Enter hexadecimal color code like this: #333333 ",
			"id" => $shortname."topmenu_sub_links_color",
			"std" => "",
			"type" => "color"),

array(	"name" => "topmenu Sub links mouse over color",
			"desc" => "Add color for <strong>top menu sublinks Mouseover</strong>, theEnter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."topmenu_sub_links_color_hover",
			"std" => "",
			"type" => "color"),
			
array( "name" => "Footer",
	"type" => "submenu"),

array(	"name" => "Footer  Font color",
			"desc" => "Add  <strong> Footer Text color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."footerFont_color",
			"std" => "",
			"type" => "color"),
			
array(	"name" => "Footer Link Mouse Over color",
			"desc" => "Add  <strong>Footer Links Mouseover color</strong>, Enter hexadecimal color code like this: #333333 <br> =================================================================================",
			"id" => $shortname."footerFont_color_ho",
			"std" => "",
			"type" => "color"),
					

array( "type" => "submit"),	
	
array( "type" => "close")
);

