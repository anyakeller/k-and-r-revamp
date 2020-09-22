<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleKrvideo extends Controller
{
  /**
   * helper function to get all video categories
   * uses get_terms()  https://developer.wordpress.org/reference/functions/get_terms/
   */
  public function videoCategories()
  {
      $args = array(
      'taxonomy' => 'krvideo-cat',
      'hide_empty' => true
    );
      return get_terms($args);
  }
}
