@extends('layouts.app')

@section('content')
  {{-- main video player --}}
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile

  {{-- all the other videos --}}
  @php
    $all_videos = get_krvideos();
  @endphp
  @while($all_videos->have_posts()) @php $all_videos-> the_post() @endphp
    @include('partials.content-'.get_post_type())
    @include('partials.content-page')
  @endwhile

@endsection
