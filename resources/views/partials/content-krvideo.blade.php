{{-- not in use --}}
<article @php post_class() @endphp>
  <header>
    {{-- <span>Posted: {{App\time_elapsed_string(get_the_date())}}</span> --}}
    {{-- <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2> --}}
    @include('partials/entry-meta')
  </header>
</article>
