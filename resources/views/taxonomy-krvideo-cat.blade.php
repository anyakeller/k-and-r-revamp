@extends('layouts.static')
{{-- KR-Video Category Page --}}

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <h1>YEET</h1>
  <div class="container my-3">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-md-3">
      @while (have_posts()) @php the_post() @endphp
        <div class="col my-2">
        @include('partials.content-'.get_post_type())
        </div>
      @endwhile
    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
