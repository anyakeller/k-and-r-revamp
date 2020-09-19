<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /**
     * helper function to get featured video
     */
    public function featuredVideo()
    {
        $args = array(
     'post_type' => 'krvideo',
     'posts_per_page' => 1,
     'meta_key'		=> 'is_featured_video',
     'meta_value'	=> 1
   );
        return new \WP_Query($args);
    }
}
