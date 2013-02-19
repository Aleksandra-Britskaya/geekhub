<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="§1$s" class="widget-container §2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
if(function_exists('register_nav_menus')){
    register_nav_menus(array(
        'nav_menu'=> 'Горизонтальное меню',
        'section_menu' => 'Меню разделов',
        'inform_menu' => 'Меню информация',
        'footer_menu' => 'Меню в подвале',
    ));
}
	
?>