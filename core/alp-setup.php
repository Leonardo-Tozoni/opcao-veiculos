<?php
if (!function_exists('alp_setup')) :
    /**
     * Alpina Theme setup.
     *
     * Set up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support post thumbnails.
     *
     * @since Alpina theme 2.1
     */
    function alp_setup()
    {

        // Add RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');

        // Support wp_title().
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails, and declare two sizes.
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(672, 372, true);
        add_image_size('width1100', 1100, 620, true);
        add_image_size('width780', 780, 700, true);

        // TRegister nav menus.
        register_nav_menus(
            array(
                'main-menu' => __('Menu Principal', 'alp')
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        add_theme_support('custom-logo', [
            'width' => 150,
            'height'  => 40,
            'flex-height' => true,
            'flex-width' => true,
            'unlink-homepage-logo' => true,

        ]);
    }
endif; // alp_setup
add_action('after_setup_theme', 'alp_setup');
