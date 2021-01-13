<article @php post_class('main-video mx-lg-auto mb-4') @endphp>

  <div class="wistia-player">
    {{ the_field('wistia_related_wistia_embed_code') }}
  </div>

  <div class="main-video-details text-center text-sm-left">
    <h3>
      {!! get_the_title() !!}
    </h3>
    <p class="">{{ the_field('video_details_video_description') }}</p>
    <span style="display: block;">
      {{App\time_elapsed_string(get_the_date())}}
    </span>
    <div class="video-sharing-button-div" style="display: none;">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#video-sharing-modal">Share <i class="fas fa-share-square fa-xs"></i></button>
    </div>
  </div>

  @include('components/video-sharing-modal')

  {{-- <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer> --}}
  </article>
