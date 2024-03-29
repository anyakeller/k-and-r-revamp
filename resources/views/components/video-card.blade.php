<article class="video-card @if($main_post_id === get_the_ID() ) now-playing @endif">
  <a href="{{ get_permalink() }}">
    {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"> --}}
    <div class="video-thumbnail-div">
      {{the_post_thumbnail('video-thumbnail')}}
      <div class="video-thumbnail-length">
        <span class="video-thumbnail-length-span">
          {!! App\get_video_length() !!}
        </span>
      </div>
    </div>
    <p class="video-card-text">
      <span class="entry-title">{!! get_the_title() !!}</span>
      <span class="text-muted mt-auto">{{App\time_elapsed_string(get_the_date())}}</span>
    </p>
  </a>
</article>
