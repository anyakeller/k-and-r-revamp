{{-- not in use --}}
<article @php post_class() @endphp>
  <header>
    <h1>but is it tho</h1>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
</article>
