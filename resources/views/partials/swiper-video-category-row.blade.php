<div class="col mt-4">
  <div class="swiper-container">
    {{-- Additional required wrapper  --}}
    <div class="swiper-wrapper">
      {{-- The video category icon --}}
      <div class="swiper-slide swiper-slide-video-category">
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
          <a href="{{ get_permalink() }}">
            {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"> --}}
            {{the_post_thumbnail(array( 240, 135 )  , array('class' => 'img-fluid' ))}}
            <p class="entry-title video-slide-text">{!! get_the_title() !!}</p>
          </a>
        </div>
        @endwhile
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>
