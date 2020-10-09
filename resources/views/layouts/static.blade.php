<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('static-page d-flex flex-column') @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header')
  <div class="wrap flex-grow-1 d-flex flex-column" role="document">
    <main class="content main px-5">
      @yield('content')
      @if (App\display_sidebar_static())
      <aside class="sidebar" id="sidebar-static">
        @include('partials.sidebar-static')
      </aside>
      @endif
    </main>

  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer()
  @endphp
</body>

</html>
