<div class="mt-4">
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      @while($one_category->have_posts())
        @php $one_category-> the_post()
        @endphp
        <div class="swiper-slide">
          <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}">
          <h6 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h6>
        </div>
      @endwhile
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>
