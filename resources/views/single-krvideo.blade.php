@extends('layouts.app')

@section('content')
{{-- main video player --}}
@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())
@endwhile

{{-- swiper tests --}}
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    <div class="swiper-slide">Slide 4</div>
    <div class="swiper-slide">Slide 5</div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

{{-- all the other videos --}}
@php
$all_videos = get_krvideos();
@endphp
@while($all_videos->have_posts())
  @php $all_videos-> the_post()
  @endphp
  @include('partials.content-'.get_post_type())
  @include('partials.content-page')
  @endwhile

  @endsection
