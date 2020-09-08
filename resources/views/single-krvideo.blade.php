@extends('layouts.app')

<style>
  .swiper-container {
    width: 100%;
    height: calc((100px + 30px) * 2);
    margin-left: auto;
    margin-right: auto;
  }
  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    height: 100px !important;
  }
</style>

@section('content')
{{-- main video player --}}
@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())
@endwhile

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
        <img class="swiper-lazy img-fluid" data-src="{{ the_field('wistia_related_video_thumbnail')  }}">
        <div class="swiper-lazy-preloader"></div>
        <h5 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h5>
      </div>
      {{-- @include('partials.content-'.get_post_type()) --}}
    @endwhile
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
@endsection
