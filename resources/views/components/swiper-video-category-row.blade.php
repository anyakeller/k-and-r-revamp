<div>
  <div class="swiper-slide-category">
    <div class="category-icon-div"><img class="category-svg-icon" src="{{ the_field('video_category_icon_main',$category )  }}" alt="triangle with all three sides equal" /></div>
    <span>{{$category -> name}}</span>
    <div class="category-icon-offsetter"></div>
  </div>
</div>
{{-- <div class="swiper-video-category-row-inner px-0"> --}}
<div class="swiper-container" style="position: static;">
  {{-- Additional required wrapper  --}}
  <div class="swiper-wrapper" style="height: auto;">

    {{-- The videos in the category --}}
    @while($one_category->have_posts())
      @php $one_category-> the_post()
      @endphp
      <div class="swiper-slide">
        @include('components/video-card')
      </div>
      @endwhile
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
{{-- </div> --}}
