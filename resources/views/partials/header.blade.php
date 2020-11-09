<header class="banner container-main">
  <nav class="navbar navbar-dark">
    <a class="navbar-brand brand w-75" href="{{ home_url('/') }}"><img class="img-fluid" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>

    <button class="navbar-toggler hamburger hamburger--minus" type="button" data-toggle="collapse" data-target="#navToggle" aria-controls="navToggle" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navToggle">
      <div class="sidebar">
        @include('partials.sidebar')
      </div>
    </div>
    {{-- <div class="collapse navbar-collapse" id="navToggle">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div> --}}
  </nav>
  {{-- <div class="banner-row">
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
  </div> --}}
</header>
