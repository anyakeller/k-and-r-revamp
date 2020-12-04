@extends('layouts.app')

@section('content')
{{-- @include('partials.page-header') --}}

  {{-- @if($featured_video->have_posts()) @php $featured_video -> the_post() @endphp
    @php
      wp_safe_redirect( get_permalink() );
      exit;
    @endphp
  @else
    @php $latest_krvideo = App\get_latest_krvideo() @endphp
    @if ($latest_krvideo->have_posts()) @php $latest_krvideo->the_post() @endphp
      @php
        wp_safe_redirect(get_permalink() );
        exit;
      @endphp
    @endif
  @endif --}}

@endsection
