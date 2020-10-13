<article @php post_class() @endphp>
  <div class="video-card">
    <a href="{{ get_permalink() }}">
      <div class="video-thumbnail-div my-2">
        {{the_post_thumbnail('video-thumbnail', array('class' => 'swiper-slide-video-thumbnail' ))}}
        <div class="video-thumbnail-length-div">
          <span class="video-thumbnail-length-span">
            {!! App\get_video_length() !!}
          </span>
        </div>
      </div>
      <header class="py-1">
        <h6 class="entry-title">{!! get_the_title() !!}</h6>
        @if (get_post_type() === 'post')
        @include('partials/entry-meta')
        @endif
      </header>
    </a>
  </div>
  {{-- <div class="entry-summary">
    @php the_excerpt() @endphp
  </div> --}}
  </article>
