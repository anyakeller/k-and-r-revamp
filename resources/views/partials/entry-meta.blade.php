{{--
<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
  {{ __('By', 'sage') }}
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
  {{ get_the_author() }}
  </a>
</p>
--}}
<article @php post_class() @endphp>
  @include('components/video-card')
</article>
{{-- <span>Posted: {{App\time_elapsed_string(get_the_date())}}</span> --}}
