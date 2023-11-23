<?php


// Images url
function get_media_src($image){
	return get_stylesheet_directory_uri() . '/assets/imgs/'. $image;
}

function get_icon_src($image){
	return get_stylesheet_directory_uri() . '/assets/imgs/icons/'. $image;
}

function get_photo_src($image){
	return get_stylesheet_directory_uri() . '/assets/imgs/photos/'. $image;
}

//print svg with tags
function get_svg_content($svg){
	return file_get_contents(get_template_directory() . '/assets/imgs/'. $svg);
}

//load template part as string (util quando usamos ajax)
function load_template_part($template_name, $args, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name, $args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

/**
 * Get nav menu items by location
 *
 * @param $location The menu location id
 */
function get_nav_menu_items_by_location( $location, $args = [] ) {
 
    // Get all locations
    $locations = get_nav_menu_locations();
 
    // Get object id by location
    $object = wp_get_nav_menu_object( $locations[$location] );
 
    // Get menu items by menu name
    $menu_items = wp_get_nav_menu_items( $object->name, $args );
 
    // Return menu post objects
    return $menu_items;
}

//se o número é par
function isNumberEven($number) {
	if($number % 2 == 0){
		return true;
		exit();
   } else {
		return false;
		exit();
   }
}

?>