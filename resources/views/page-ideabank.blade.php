@extends('layouts.app')

@section('content')
<div>
  @include('partials.page-header')
  @php $images = get_field('idea_bank_images')
  @endphp
  @if ($images)

  <!-- Slider main container -->
  <div id="ideabank-swiper-div" class="my-4 my-lg-2">
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        @foreach ($images as $image)
        <!-- Slides -->
        <div class="swiper-slide">
          <img class="img-fluid" src="{{ $image['url'] }}" />
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  </div>
  @endif
</div>
@endsection
