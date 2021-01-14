<article @php post_class('main-video mx-lg-auto mb-4') @endphp>

  <div class="wistia-player">
    {{ the_field('wistia_related_wistia_embed_code') }}
  </div>

  <div class="main-video-details text-center text-md-left">
    <div class="d-md-flex">
      <h3 class="flex-md-grow-1">
        {!! get_the_title() !!}
      </h3>
      <div class="d-none d-md-block">
        <button type="button" class="btn btn-outline-primary share-btn" data-toggle="modal" data-target="#video-sharing-modal">Share <i class="fas fa-share-square fa-xs"></i></button>
      </div>
    </div>
    <p class="">{{ the_field('video_details_video_description') }}</p>
    <div>
      <span>
        {{App\time_elapsed_string(get_the_date())}}
      </span>
      <button type="button" class="d-inline-block d-md-none btn btn-outline-primary ml-2 share-btn" data-toggle="modal" data-target="#video-sharing-modal">Share <i class="fas fa-share-square fa-xs"></i></button>
    </div>
  </div>

  @include('components/video-sharing-modal')

  {{-- <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer> --}}
  </article>
