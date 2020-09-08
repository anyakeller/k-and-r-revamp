<div class="wistia-player mx-auto">
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
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#video-sharing-modal">Share this video! <i class="fas fa-share-square"></i></button>
  </div>
  @php
  $wistia_embed = htmlspecialchars(get_field('wistia_related_wistia_embed_code'), ENT_QUOTES);
  @endphp
  <div class="modal fade" id="video-sharing-modal" tabindex="-1" aria-labelledby="video-sharing-modal-label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="mx-1">Select a sharing option and then click the copy button to copy the text</h4> <button class="btn btn-primary" id="copySocialShareValue">Click to Copy to Clipboard <i class="far fa-clipboard"></i></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <ul class="nav nav-tabs mb-3" id="video-sharing-tabs" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="link-tab" data-toggle="tab" href="#link" role="tab" aria-controls="link" aria-selected="true">Link</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="embed-tab" data-toggle="tab" href="#embed" role="tab" aria-controls="embed" aria-selected="false">Embed Code</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="hnork-tab" data-toggle="tab" href="#hnork" role="tab" aria-controls="hnork" aria-selected="false">Hnork</a>
              </li>
            </ul>
            <div class="tab-content" id="video-sharing-tabs-content">
              <div class="social-tab tab-pane fade show active" id="link" role="tabpanel" aria-labelledby="link-tab"><input class="form-control" type="text" value="{{ get_permalink() }}" readonly /></div>
              <div class="social-tab tab-pane fade" id="embed" role="tabpanel" aria-labelledby="embed-tab"><textarea class="form-control" type="text" value="{{ htmlspecialchars_decode($wistia_embed) }}" rows="6" readonly>{{ htmlspecialchars_decode($wistia_embed) }}</textarea></div>
              <div class="social-tab tab-pane fade" id="hnork" role="tabpanel" aria-labelledby="hnork-tab"><input class="form-control" type="text" value="hnork!" readonly/></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p>{{ the_field('video_details_video_description') }}</p>
</div>


<div>
  {{-- <img class="img-fluid" src="{{ the_field('wistia_related_video_thumbnail')  }}"></div> --}}
</div>
{{-- {{ get_permalink() }} --}}
