<article @php post_class('main-video mx-lg-auto') @endphp>

  <div class="mx-auto mb-4">

    @include('components/main-video')

    @php the_content()
    @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
  </article>
