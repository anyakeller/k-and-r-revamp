@extends('layouts.app')

@section('content')
{{-- @include('partials.page-header') --}}

  @if($featured_video->have_posts()) @php $featured_video -> the_post() @endphp
    @php
      wp_safe_redirect( get_permalink() );
      exit;
    @endphp
  @else
    @if (have_postS()) @php the_post() @endphp
      @php
        wp_safe_redirect( get_permalink() );
        exit;
      @endphp
    @endif
  @endif

@endsection
