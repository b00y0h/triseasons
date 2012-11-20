<?php
// Global Sidebar
if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'Default Sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));

	// Global Footer
	if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'Sidebar Blog',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));	
	
	if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Footer Column 1',
	'before_widget' => ' <div class="footerbox">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));


	if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Footer Column 2',
	'before_widget' => ' <div class="footerbox">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));


	if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Footer Column 3',
	'before_widget' => ' <div class="footerbox">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Footer Column 4',
	'before_widget' => ' <div class="footerbox">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));

	
?>
