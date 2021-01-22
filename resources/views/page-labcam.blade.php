@extends('layouts.app')

@section('content')
  <div class="text-center mb-5">
    <button class="btn btn-primary">I'm a button</button>
    {{-- <i class="fas fa-hard-hat display-3"></i>
    <h1 class="display-2 text-dark">UNDER CONSTRUCTION</h1>
    <h3 class="display-4 text-muted">Stay tuned!</h3> --}}
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </div>
@endsection
