<header class="banner container-main">
  <div class="banner-row mt-lg-2">
    <div>
      <div id="sticky-logo">
        <a class="brand" href="{{ home_url('/') }}"><img class="kite-rocket-logo-header" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>
      </div>
      <button class="hamburger hamburger--minus" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <div class="sidebar" id="sidebar-mobile">
    @include('partials.sidebar')
  </div>
  @if (App\display_sidebar_static())
  <div class="sidebar" id="sidebar-static">
    @include('partials.sidebar-static')
  </div>
  @endif
</header>