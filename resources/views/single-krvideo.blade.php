@extends('layouts.app')

@section('content')
{{-- main video player --}}
@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())
@endwhile


@php
$categories = get_video_categories();
@endphp
@foreach( $categories as $category )
  @php $one_category = get_videos_from_category($category); @endphp
  @if($one_category->have_posts())
    @include('partials/swiper-video-category-row')
  @endif
@endforeach

@endsection
