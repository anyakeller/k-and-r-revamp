<div class="swiper-slide-category">
  <img class="category-svg-icon" src="{{ the_field('video_category_icon_main',$category )  }}" alt="triangle with all three sides equal" />
  <span>{{$category -> name}}</span>
</div>
<section class="swiper-container">

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
</section>
