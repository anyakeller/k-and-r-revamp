<div class="wistia-player">
  {{ the_field('wistia_related_wistia_embed_code') }}
</div>
<div class="main-video-details">
  <h4>{{ the_field('video_details_video_title') }}
    <span style="display: block;">Posted on
      @php $post_date = get_the_date(); echo $post_date;
      @endphp
    </span>
  </h4>

  <div class="float-right video-sharing-button-div">
    <span>Share this video!</span>
    <button type="button" class="btn video-sharing-icon" title="VIDEO LINK" data-placement="bottom" data-toggle="modal" data-target="#video-sharing-modal" data-toshare="{{ get_permalink() }}">
      <h5>
        <i class="fas fa-link"></i>
      </h5>
    </button>
    @php
    $wistia_embed = htmlspecialchars(get_field('wistia_related_wistia_embed_code'), ENT_QUOTES);
    @endphp
    <button type="button" class="btn video-sharing-icon" title="WISTIA EMBED CODE" data-placement="bottom" data-toggle="modal" data-target="#video-sharing-modal" data-toshare="{{ htmlspecialchars_decode($wistia_embed) }}">
      <h5>
        <i class="fas fa-code"></i>
      </h5>
    </button>
  </div>
  <div class="modal fade" id="video-sharing-modal" tabindex="-1" aria-labelledby="video-sharing-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5><span class="modal-title" id="video-sharing-modal-label"></span> <span><i class="far fa-copy"></i></span></h5>
        </div>
        <div class="modal-body">
          <pre class="user-select-all"><code></code></pre>
        </div>
      </div>
    </div>
  </div>
</div>
<p>{{ the_field('video_details_video_description') }}</p>


<div>
  {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"></div> --}}
</div>
{{-- {{ get_permalink() }} --}}
