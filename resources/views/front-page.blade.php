@extends('layouts.app')

@php

@endphp

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
