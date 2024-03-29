@extends('layouts.app')

@section('content')
@include('partials.page-header')
@if (!have_posts())
<div class="alert alert-warning mb-4">
  {{ __('Sorry, no results were found.', 'sage') }}
</div>
@endif

<div style="font-size: 1.2em">
  {{-- {!! get_search_form( array(
  'echo' => false,
  'aria_label' => 'searchpage-search'
  )) !!} --}}
  @include('partials.krvideo-searchform')
</div>

<div class="video-grid container my-3">
  <div class="row row-cols-3 ">
    @while(have_posts())
    <div class="col my-2 px-2">
      @php the_post()
      @endphp
      @include('partials.content-search')
    </div>
    @endwhile
  </div>
</div>

{!! get_the_posts_navigation() !!}
@endsection
