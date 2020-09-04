@extends('layouts.app')

@section('content')
  <!-- @include('partials.page-header') -->
  @php
    $main_video = get_featured_video();
  @endphp

  @if($main_video->have_posts()) @php $main_video -> the_post() @endphp
    @php
      wp_safe_redirect( get_permalink() );
      exit;
    @endphp
  @else
    {{-- @include('partials/main-video')
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      @include('partials.content-page')
    @endwhile --}}
    @if (have_postS()) @php the_post() @endphp
      @php
        wp_safe_redirect( get_permalink() );
        exit;
      @endphp
    @endif
  @endif

@endsection
