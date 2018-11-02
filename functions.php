<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',));

register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ricetard' ),
	) );
?>