<?php

/**
 * Register three Alpina Theme widget areas.
 *
 * @since Alpina theme 2.1
 */
function alp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar #1', 'alp' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Conteúdo da sidebar #1.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar #2', 'alp' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Conteúdo da sidebar #2.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar #3', 'alp' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Conteúdo da sidebar #3.', 'alp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'alp_widgets_init' );
  

?>