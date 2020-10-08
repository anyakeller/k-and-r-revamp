@extends('layouts.static')

@section('content')
  @include('partials.page-header')
  <h2>test idea</h2>
  {{-- @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile --}}
@endsection
