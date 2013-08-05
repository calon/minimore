<?php
if ( ! isset( $content_width ) )
    $content_width = 604;

add_theme_support( 'automatic-feed-links' );

if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<ul><li class="widget">', // widget 的开始标签
		'after_widget' => '</li></ul>', // widget 的结束标签
		'before_title' => '<h2>', // 标题的开始标签
		'after_title' => '</h2>' // 标题的结束标签
	));
}
?>
