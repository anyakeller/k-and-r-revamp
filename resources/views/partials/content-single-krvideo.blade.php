<article @php post_class() @endphp>

  <div class="main-video mx-auto">

    @include('partials/main-video')

    <p>{{ the_field('video_details_video_length') }}</p>

    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
</article>
