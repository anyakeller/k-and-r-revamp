@extends('layouts.app')

@section('content')
<div class="mt-4">
  @include('partials.page-header')
  <div class="text-center">
    <i class="fas fa-hard-hat display-3"></i>
    <h1 class="display-2 text-dark">UNDER CONSTRUCTION</h1>
    <h3 class="display-4 text-muted">Stay tuned!</h3>
    @include('partials.content-page')
    {{-- @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile --}}
  </div>
</div>
@endsection
