<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageKr extends Controller{
  public function now(){
      $potato = 'qwer';
      return 'asdf';
  }
  /**
   * helper function to get featured video
   */
  public function hasFeaturedVideo()
  {
      $args = array(
       'post_type' => 'krvideo',
       'posts_per_page' => 1,
       'meta_key'		=> 'is_featured_video',
       'meta_value'	=> 1
     );
      return new \WP_Query($args);
  }
  public static function hau(){
      $args = "asdf";
      return $args;
  }
}
