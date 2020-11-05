<div class="wistia-player mx-auto">
  {{ the_field('wistia_related_wistia_embed_code') }}
</div>


<div class="main-video-details">
  <div class="d-flex">
    <div class="flex-grow-1">
      <h3>
        {!! get_the_title() !!}
        {{-- {{ the_field('video_details_video_title') }} --}}
        <span style="display: block;">
          {{App\time_elapsed_string(get_the_date())}}
        </span>
      </h3>
    </div>
    <div class="float-right video-sharing-button-div">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#video-sharing-modal">Share this video! <i class="fas fa-share-square"></i></button>
    </div>
  </div>
  <p>{{ the_field('video_details_video_description') }}</p>
</div>

@php
$wistia_embed = htmlspecialchars(get_field('wistia_related_wistia_embed_code'), ENT_QUOTES);
@endphp
<div class="modal fade" id="video-sharing-modal" tabindex="-1" aria-labelledby="video-sharing-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="w-100 px-1 my-0 text-center">Share This Video</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row align-items-center mt-2">
            <div class="col-2 p-0">
              <button class="btn btn-block btn-outline-success" id="copy-link">Copy Link</button>
            </div>
            <div class="col">
              <input id="link-text" class="form-control" tpe="text" value="{{ get_permalink() }}" readonly />
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col-2 p-0">
              <button class="btn btn-block btn-outline-success" id="copy-embed">Copy Embed</button>
            </div>
            <div class="col">
              <textarea id="embed-text" class="form-control"  type="text" rows="6" readonly>{{ htmlspecialchars_decode($wistia_embed) }}</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
