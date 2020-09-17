@extends('layouts.app')

{{-- Sets up header orange extention on post pages  --}}
<style>
  .banner::after {
    content: "";
  }
</style>


@section('content')
{{-- main video player --}}
<div class="row mb-3">
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

  @foreach( $categories as $category )
  <div class="row mx-0">
    @php $one_category = get_videos_from_category($category)
    @endphp
    @if($one_category->have_posts())
      @include('partials/swiper-video-category-row')
    @endif
  </div>
  <hr />
  @endforeach



@endsection
