@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <h1>adsfasdfas</h1>
    @include('partials.content-page')
  @endwhile
@endsection
