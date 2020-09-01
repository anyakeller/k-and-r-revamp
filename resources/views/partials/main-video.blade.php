<div class="wistia-player">
  {{ the_field('wistia_related_wistia_embed_code') }}
</div>
<div class="main-video-details">
  <h4>{{ the_field('video_details_video_title') }}</h4>
  <span class="float-right">Posted on
    @php $post_date = get_the_date(); echo $post_date;
    @endphp </span>
</div>
<p>{{ the_field('video_details_video_description') }}</p>

<div>
  {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"></div> --}}
</div>
