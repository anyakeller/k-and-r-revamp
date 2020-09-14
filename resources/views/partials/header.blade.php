<header class="banner container-main">
  <div class="banner-row">
    <div class="col">
      <div id="sticky-logo">
        <a class="brand" href="{{ home_url('/') }}"><img class="kite-rocket-logo-header" src="@asset('images/kite-and-rocket-research-logo.png')" alt="{{ get_bloginfo('name', 'display') }}"></a>
      </div>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
