<?php


function minimore_widgets_init() {

register_sidebar(array(
    'before_widget' => '<ul><li class="widget">', // widget 的开始标签
    'after_widget' => '</li></ul>', // widget 的结束标签
    'before_title' => '<h2>', // 标题的开始标签
    'after_title' => '</h2>' // 标题的结束标签
));
}
add_action('init', 'minimore_widgets_init');

function minimore_setup() {
    
    add_theme_support( 'automatic-feed-links' );

    if ( ! isset( $content_width ) )
        $content_width = 604;
}
add_action( 'after_setup_theme', 'minimore_setup' );


function minimore_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Site name.
	$title .= get_bloginfo( 'name' );

	// // Add the blog description for the home/front page.
	//$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
	//$title = "$title $sep $site_description";

	// Page number.
	if ( $paged >= 2 || $page >= 2 )
		$title =  "$title $sep " . sprintf( 'Page %s', max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'minimore_wp_title', 10, 2 );

?>
