<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


/*************************************************************************
 *
 *   You have reached the editable section!
 *
 *   Everything below has been added for this specific Sage wordpress theme variant
 *
 *   Still, you should heed the warning at the top of the file
 *
 */


/*
 * Custom helper functions for the actual site
 */

/**
 * helper function to get featured video
 */
function get_featured_video()
{
    $args = array(
    'post_type' => 'krvideo',
    'posts_per_page' => 1,
    'meta_key'		=> 'is_featured_video',
    'meta_value'	=> 1
  );
    $main_video = new WP_Query($args);
    return $main_video;
}

/**
 * helper function to get all video categories
 * uses get_terms()  https://developer.wordpress.org/reference/functions/get_terms/
 */
function get_video_categories()
{
    $args = array(
    'taxonomy' => 'krvideo-cat',
    'hide_empty' => true
  );
    $video_category_terms = get_terms($args);
    return $video_category_terms;
}

/**
 * helper function to get all videos in a video category
 * @param WP_Term[]|WP_Error $video_category_terms
 * @return WP_Query
 */
function get_videos_from_category($video_category)
{
    $args = array(
    'post_type' => 'krvideo',
    'tax_query' => array(
      array(
        'taxonomy' => 'krvideo-cat',
        'terms' => $video_category->term_id
      )
    ),
  );
    $videos_by_category = new WP_Query($args);
    return $videos_by_category;
}

function get_all_videos_in_all_categories()
{
    echo 'hello';
}

/**
 * helper function to get all krvideos
 * @return WP_Query
 */
function get_krvideos()
{
    $args = array(
  'post_type' => 'krvideo',
  'post_status'		=> 'publish',
  'order'				=> 'DESC',
  'posts_per_page' => 40,
  );
    $krvideos = new WP_Query($args);
    return $krvideos;
}

/**
 * helper function to get how long a video was posted
 * @return string
 */
function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) {
        $string = array_slice($string, 0, 1);
    }
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
