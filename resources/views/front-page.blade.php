@extends('layouts.app')

@section('content')
  <!-- @include('partials.page-header') -->
  @php
    $args = array(
      'post_type' => 'video',
      'posts_per_page' => 1,
      'meta_key'		=> 'is_featured_video',
      'meta_value'	=> 1
    );
    $main_video = new WP_Query($args);
  @endphp

  @if($main_video->have_posts()) @php $main_video -> the_post() @endphp
    @php
      wp_safe_redirect( get_permalink() );
      exit;
    @endphp
  @else
    @include('partials/main-video')
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      @include('partials.content-page')
    @endwhile
  @endif

@endsection
