<div class="wistia-player mx-auto">
  {{ the_field('wistia_related_wistia_embed_code') }}
</div>


<div class="main-video-details">
  <div class="d-flex">
    <div class="flex-grow-1">
      <h4>
        {!! get_the_title() !!}
        {{-- {{ the_field('video_details_video_title') }} --}}
        <span style="display: block;">
          {{App\time_elapsed_string(get_the_date())}}
        </span>
      </h4>
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
        <h3 class="mx-auto px-1 text-center">Select a sharing option and then click the copy button to copy the text</h3>
        {{-- <button class="btn btn-primary" id="copySocialShareValue">Click to Copy to Clipboard <i class="far fa-clipboard"></i></button> --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <ul class="nav nav-tabs nav-fill mb-3" id="video-sharing-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="link-tab" data-toggle="tab" href="#link" role="tab" aria-controls="link" aria-selected="true">Link</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="embed-tab" data-toggle="tab" href="#embed" role="tab" aria-controls="embed" aria-selected="false">Embed Code</a>
            </li>
          </ul>
          <div class="row">
            <div class="col-12 col-md-2 mb-3 pr-1">
              <button class="btn btn-block btn-primary" id="copySocialShareValue"><i class="far fa-clipboard fa-lg mr-2 mx-md-auto my-md-2"></i>Click to Copy</button>
            </div>
            <div class="col d-flex flex-column justify-content-center">
              <div class="tab-content" id="video-sharing-tabs-content">
                <div class="social-tab tab-pane fade show active" id="link" role="tabpanel" aria-labelledby="link-tab"><input class="form-control" type="text" value="{{ get_permalink() }}" readonly /></div>
                <div class="social-tab tab-pane fade" id="embed" role="tabpanel" aria-labelledby="embed-tab"><textarea class="form-control" type="text" rows="6" readonly>{{ htmlspecialchars_decode($wistia_embed) }}</textarea></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
