<?php

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Alpina Theme 2.1
 */
function alp_scripts()
{

    $utilsVersion = "1.0";

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // wp_enqueue_style('alp', get_template_directory_uri() . '/assets/css/alp.css', array(), null);

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);

    wp_enqueue_script('codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), $utilsVersion, true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery','util'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'alp_scripts');
// no-js support
function codyframe_js_support()
{
?>
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
<?php
}

?>