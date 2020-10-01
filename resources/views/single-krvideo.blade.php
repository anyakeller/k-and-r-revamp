{{--
  Template Name: Krvideo Front Page
--}}

@extends('layouts.app')

{{-- For some stupid reason if I delete this the spacing on the video category icons flips out  --}}
<style>
</style>

@section('content')
{{-- main video player --}}

@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())

@endwhile



@foreach( $video_categories as $category )
<div class="row mx-0">
  @php $one_category = App\get_videos_from_category($category)
  @endphp
  @if($one_category->have_posts())
    @include('partials/swiper-video-category-row')
    @endif
</div>
<hr />
@endforeach



@endsection
