@extends('layouts.app')

@section('content')
{{-- main video player --}}
<h1>
  {{-- {{ $now }} --}}
  @if($has_featured_video->have_posts()) @php $has_featured_video -> the_post() @endphp
    <h2>haspo</h2>
  @endif
</h1>

@endsection
