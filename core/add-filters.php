<?php

/**
 * Register three Alpina Theme filters.
 *
 * @since Alpina theme 2.1
 */



/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Alpina theme 2.1
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function alp_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
}

if ( is_active_sidebar( 'sidebar-3' ) ) {
	$classes[] = 'footer-widgets';
}

if ( is_singular() && ! is_front_page() ) {
	$classes[] = 'singular';
}

if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	$classes[] = 'slider';
} elseif ( is_front_page() ) {
	$classes[] = 'grid';
}

return $classes;
}
add_filter( 'body_class', 'alp_body_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Alpina theme 2.1
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function alp_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'alp' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'alp_wp_title', 10, 2 );


 /* remover versao */
function change_footer_version() {
	return ' ';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );

 //Remove title dos links do menu
function my_menu_notitle( $menu ){
	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

//Remove o menu admin do topo
function hide_admin_bar(){ return false; }
global $current_user;
wp_get_current_user() ;

if($current_user->user_login == 'alpina' && !wp_is_mobile()) {
	add_filter('show_admin_bar', '__return_true');
} else {
	add_filter('show_admin_bar', '__return_false');
}

function loginpage_custom_link() {
	return 'alpinaweb.com.br';
}
add_filter('login_headerurl','loginpage_custom_link');

/* remover texto rodapé */
add_filter('admin_footer_text', 'open_source');
function open_source() {
	echo 'Alpina Digital Branding';
}


?>