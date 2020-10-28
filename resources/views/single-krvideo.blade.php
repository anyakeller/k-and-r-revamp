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
<ul style="list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
    margin-bottom: 25px;">
  @php $main_post_id = get_the_ID()
  @endphp
  @foreach( $video_categories as $category )
  <li style="position: relative">
    <div class="swiper-video-category-row pt-3 mx-0">
      @php $one_category = App\get_videos_from_category($category)
      @endphp
      @if($one_category->have_posts())
        @include('components/swiper-video-category-row')
        @endif
    </div>
    <hr />
  </li>
  @endforeach
</ul>
@endsection
