<header class="banner container-main">
  <nav class="navbar navbar-expand-sm">
    <a class="navbar-brand brand mr-sm-0" href="{{ home_url('/') }}"><img id="kite-rocket-logo-img" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>

    <button class="navbar-toggler hamburger hamburger--minus" type="button" data-toggle="collapse" data-target="#navToggle" aria-controls="navToggle" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse my-2 sidebar" id="navToggle">
      {{-- <div class=" sidebar-mobile"> --}}
        @include('partials.sidebar')
      {{-- </div> --}}
    </div>

  </nav>
  {{-- <div class="banner-row">
    <div>
      <div id="sticky-logo">
        <a class="brand" href="{{ home_url('/') }}"><img id="kite-rocket-logo-img" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>
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
  </div> --}}
</header>
