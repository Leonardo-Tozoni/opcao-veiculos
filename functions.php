<?php

/**
 * Alpina Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Alp Cody
 * @since 1.0
 */

/**
 * Sets content width.
 */


if (!isset($content_width)) $content_width = 900;

/**
 * Alpina Theme Classes.
 */
require_once get_template_directory() . '/core/bootstrap-nav.php';
require_once get_template_directory() . '/core/custom-post-type.php';
require_once get_template_directory() . '/core/alp-setup.php';
require_once get_template_directory() . '/core/metabox.php';
require_once get_template_directory() . '/core/taxonomy.php';
require_once get_template_directory() . '/core/tutoriais.php';
require_once get_template_directory() . '/core/scripts-register.php';
require_once get_template_directory() . '/core/widget-register.php';
require_once get_template_directory() . '/core/util.php';
require_once get_template_directory() . '/core/add-filters.php';
require_once get_template_directory() . '/core/remove-actions.php';
require_once get_template_directory() . '/core/add-actions.php';

// Images url
function midiaSrc($image){
	echo get_stylesheet_directory_uri() . '/assets/img/'. $image;
}

//print svg with tags
function printSvg($svg){
	echo file_get_contents(get_template_directory() . '/assets/img/'. $svg);
}

