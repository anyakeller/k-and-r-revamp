<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

/**
 *
 * Custom helper functions for the site
 *
 */

/**
 * Determine whether to show the sidebar for static pages
 * @return bool
 */
function display_sidebar_static()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar_static', false);
    return $display;
}


// Global modules
use WP_Query;
use DateTime;

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

/**
 * helper function to get the latest krvideo
 * (for use when there is no featured video)
 * @return WP_Query
 */
function get_latest_krvideo()
{
    $args = array(
  'post_type' => 'krvideo',
  'post_status'		=> 'publish',
  'order'				=> 'DESC',
  'posts_per_page' => 1,
  );
    $latest_krvideo = new WP_Query($args);
    return $latest_krvideo;
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


/**
 * Helper to get the video length
 * The function is convoluted because it has to support the older post
 * format with the video length in the exceprt (Eeeeew, gross)
 * @return string
 */

function get_video_length()
{
    $video_len_field = get_field('video_details_video_length');
    if ($video_len_field) {
        return $video_len_field;
    } else {
        $full_excerpt = get_the_excerpt();

        $video_len__full_location = strrpos($full_excerpt, '<font');
        $video_len_short=strstr(substr($full_excerpt, $video_len__full_location - 1), "<b>");
        return $video_len_short;
    }
}
