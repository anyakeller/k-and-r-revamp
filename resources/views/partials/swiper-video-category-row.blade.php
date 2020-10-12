<div class="swiper-video-category-row-inner shift-left mt-4 px-0">
  <div class="swiper-container">
    {{-- Additional required wrapper  --}}
    <div class="swiper-wrapper">
      {{-- The video category icon --}}
      <div class="swiper-slide swiper-slide-category">
        <div class="category-icon-div"><img class="category-svg-icon" src="{{ the_field('video_category_icon_main',$category )  }}" alt="triangle with all three sides equal" /></div>
        {{-- <img style="background: url('{{ the_field('video_category_icon_main',$category )  }}') no-repeat center;" alt="triangle with all three sides equal"/> --}}
        <p>{{$category -> name}}</p>
        <div class="category-icon-offsetter"></div>
      </div>
      {{-- The videos in the category --}}
      @while($one_category->have_posts())
        @php $one_category-> the_post()
        @endphp
        <div class="swiper-slide">
          <div class="video-card @if($main_post_id === get_the_ID() ) now-playing @endif">
            <a href="{{ get_permalink() }}">
              {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"> --}}
              <div class="video-thumbnail-div">
                {{the_post_thumbnail('video-thumbnail', array('class' => 'swiper-slide-video-thumbnail' ))}}
                <div class="video-thumbnail-length-div">
                  <span class="video-thumbnail-length-span">
                    @php $vido_len_field = get_field('video_details_video_length'); @endphp
                    @if ($vido_len_field)
                      {{ the_field('video_details_video_length') }}
                    @else
                      @php
                        $full_excerpt = get_the_excerpt();
                        $video_len__full_location = strrpos($full_excerpt, '<font');
                        $video_len_short = strstr(substr($full_excerpt, $video_len__full_location - 1), "<b>");
                        echo $video_len_short;
                      @endphp
                    @endif
                  </span>
                </div>
              </div>
              <div class="entry-title video-slide-text">
                <p>{!! get_the_title() !!}</p>
                <span class="text-muted">{{App\time_elapsed_string(get_the_date())}}</span>
              </div>
            </a>
          </div>
        </div>
        @endwhile
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>
