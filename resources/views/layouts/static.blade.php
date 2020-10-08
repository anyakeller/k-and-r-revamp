<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('static-page') @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header')
  <div class="wrap container-main" role="document">
    <main class="content main">
      @yield('content')
    </main>
    @if (App\display_sidebar_static())
    <aside class="sidebar" id="sidebar-static">
      @include('partials.sidebar-static')
    </aside>
    @endif
  </div>
  @php do_action('get_footer')
  @endphp
  @include('partials.footer')
  @php wp_footer()
  @endphp
  </body>

</html>
