<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    <p>SINGLE VIDEO</p>
    <!-- @include('partials/entry-meta') -->
    @php the_field('wistia-related_wistia_embed_code') @endphp
    <a href="{{ the_field('wistia-related_video_wistia_link') }}">wistia link</a>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  <!-- @php comments_template('/partials/comments.blade.php') @endphp -->
</article>
