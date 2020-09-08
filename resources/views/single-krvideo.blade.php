@extends('layouts.app')

<style>
  .swiper-container {
    height: calc((200px + 10px) * 2);
  }

  .swiper-slide {
    text-align: center;
    height: 200px !important;
  }
</style>

@section('content')
{{-- main video player --}}
@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())
@endwhile

<hr style="border-top: 3px solid rgba(0, 0, 0, 0.2);" />

{{-- all the other videos --}}
@php
$all_videos = get_krvideos();
@endphp
{{-- swiper tests --}}
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    @while($all_videos->have_posts())
      @php $all_videos-> the_post()
      @endphp
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}">
        {{-- <div class="swiper-lazy-preloader"></div> --}}
        <h6 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h6>
      </div>
      {{-- @include('partials.content-'.get_post_type()) --}}
      @endwhile
  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
@endsection
