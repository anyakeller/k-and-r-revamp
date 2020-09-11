@extends('layouts.app')

@section('content')
{{-- main video player --}}
<div class="row">
  <div class="col">
    @while(have_posts())
    @php the_post()
    @endphp
    @include('partials.content-single-'.get_post_type())
  </div>
</div>
@endwhile


@php
$categories = get_video_categories();
@endphp
<div class="row">
  <div class="col">
    @foreach( $categories as $category )
      @php $one_category = get_videos_from_category($category); @endphp
      @if($one_category->have_posts())
        @include('partials/swiper-video-category-row')
      @endif
      <hr style="border-top: 2px solid rgba( 0, 0, 0, 0.2);"/>
    @endforeach
  </div>
</div>

@endsection
