@extends('layouts.static')

@section('content')
@include('partials.page-header')
<h2>test idea</h2>
@php $images = get_field('idea_bank_images') @endphp
@if ($images)

<!-- Slider main container -->
<style>
  .swiper-container {
    width: 100%;
  }
</style>
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    @foreach ($images as $image)
      <!-- Slides -->
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ $image['url'] }}"/>
      </div>
    @endforeach
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>
@endif

@endsection
