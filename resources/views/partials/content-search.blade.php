<article @php post_class() @endphp>
  <div style="position: relative; display: flex;">
    {{the_post_thumbnail('video-thumbnail', array('class' => 'swiper-slide-video-thumbnail' ))}}
    <div style="text-align: end;  position: absolute; display: flex; align-items: flex-end; top: 0;right: 0; height: 100%;">
      <span style="padding: 0 2px; position: relative; background-color: rgba(38, 38, 38, 0.8); color: white;">
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
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @if (get_post_type() === 'post')
    @include('partials/entry-meta')
    @endif
  </header>
  {{-- <div class="entry-summary">
    @php the_excerpt() @endphp
  </div> --}}
  </article>
