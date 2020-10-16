<div class="video-card @if($main_post_id === get_the_ID() ) now-playing @endif">
  <a href="{{ get_permalink() }}">
    {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"> --}}
    <div class="video-thumbnail-div">
      {{the_post_thumbnail('video-thumbnail', array('class' => 'swiper-slide-video-thumbnail' ))}}
      <div class="video-thumbnail-length-div">
        <span class="video-thumbnail-length-span">
          {!! App\get_video_length() !!}
        </span>
      </div>
    </div>
    <p class="video-slide-text">
      <span class="entry-title">{!! get_the_title() !!}</span>
      <span class="text-muted">{{App\time_elapsed_string(get_the_date())}}</span>
    </p>
  </a>
</div>
