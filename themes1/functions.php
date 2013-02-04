<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="§1$s" class="widget-container §2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
?>