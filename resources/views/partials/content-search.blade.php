<article @php post_class() @endphp>
  <div class="video-thumbnail-div my-2">
    {{the_post_thumbnail('video-thumbnail', array('class' => 'swiper-slide-video-thumbnail' ))}}
    <div class="video-thumbnail-length-div">
      <span class="video-thumbnail-length-span">
        @php $vido_len_field = get_field('video_details_video_length');
        @endphp
        @if ($vido_len_field)
        {{ the_field('video_details_video_length') }}
        @else
        @php
        $full_excerpt = get_the_excerpt();
        $video_len__full_location = strrpos($full_excerpt, '
        <font'); $video_len_short=strstr(substr($full_excerpt, $video_len__full_location - 1), "<b>" ); echo $video_len_short; @endphp
        @endif
      </span>
    </div>
  </div>
  <header class="py-1">
    <h5 class="entry-title text-center"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h5>
    @if (get_post_type() === 'post')
    @include('partials/entry-meta')
    @endif
  </header>
  {{-- <div class="entry-summary">
    @php the_excerpt() @endphp
  </div> --}}
  </article>
