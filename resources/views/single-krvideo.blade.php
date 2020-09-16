@extends('layouts.app')

{{-- Sets up header orange extention on post pages  --}}
<style>
  .banner::after {
    content: "";
  }
</style>


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

<style>
  .swiper-slide-video-category {
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
    width: 100px !important;
  }

  .category-svg-icon {
    max-width: 40px;
    /* max-height: 40px; */
  }

  .category-icon-div {
    flex-grow: 1;
    display: flex;
    justify-content: center;
  }

  .category-icon-offsetter {
    height: 65px;
  }
</style>
@php
$categories = get_video_categories();
@endphp
<div class="row">
  @foreach( $categories as $category )
  @php $one_category = get_videos_from_category($category)
  @endphp
  @if($one_category->have_posts())
    @include('partials/swiper-video-category-row')
    @endif
    <hr style="border-top: 2px solid rgba( 0, 0, 0, 0.2);" />
    @endforeach

</div>

@endsection
