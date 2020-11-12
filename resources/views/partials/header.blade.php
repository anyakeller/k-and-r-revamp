<header class="banner container-main">
  <nav class="navbar navbar-mobile-only">
    <a class="navbar-brand brand mr-sm-0" href="{{ home_url('/') }}"><img id="kite-rocket-logo-img" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>
    <button class="navbar-toggler hamburger hamburger--minus" type="button" data-toggle="collapse" data-target="#navToggle" aria-controls="navToggle" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse mt-4 mb-2 sidebar sidebar-mobile-only" id="navToggle">
      @include('partials.sidebar')
    </div>
  </nav>
  @if (App\display_sidebar())
  <nav class="sidebar" id="sidebar-main">
    @include('partials.sidebar')
  </nav>
  @endif
</header>
