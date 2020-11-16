<div class="wistia-player mx-auto">
  {{ the_field('wistia_related_wistia_embed_code') }}
</div>

<div class="main-video-details">
  <div class="d-flex">
    <div class="flex-grow-1">
      <h3>
        {!! get_the_title() !!}
        <span style="display: block;">
          {{App\time_elapsed_string(get_the_date())}}
        </span>
      </h3>
    </div>
    <div class="float-right video-sharing-button-div">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#video-sharing-modal">Share Video <i class="fas fa-share-square fa-xs"></i></button>
    </div>
  </div>
  <p>{{ the_field('video_details_video_description') }}</p>
</div>

@include('components/video-sharing-modal')
