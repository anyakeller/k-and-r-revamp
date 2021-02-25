@extends('layouts.app')

@section('content')
{{-- main video player --}}

@while(have_posts())
@php the_post()
@endphp
@include('partials.content-single-'.get_post_type())
@endwhile
<section>
  <ul class="swiper-video-category-gallery">
    @php $main_post_id = get_the_ID()
    @endphp
    <hr />
    @foreach( $video_categories as $category )
    <li>
      <article class="swiper-video-category-row mx-0">
        @php $one_category = App\get_videos_from_category($category)
        @endphp
        @if($one_category->have_posts())
        @include('components/swiper-video-category-row')
        @endif
      </article>
    </li>
    <hr />
    @endforeach
  </ul>
</section>
@endsection