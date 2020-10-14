@extends('layouts.static')

@section('content')
@include('partials.page-header')

@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage') }}
</div>
@endif

<div class="container my-3">
  <div class="row row-cols-2 row-cols-md-3">
  @while(have_posts())
    <div class="col my-2">
      @php the_post()
      @endphp
      @include('partials.content-search')
    </div>
  @endwhile
</div>
</div>

{!! get_the_posts_navigation() !!}
@endsection
