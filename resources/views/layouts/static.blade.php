<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('static-page d-flex flex-column') @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header')
  <div class="wrap flex-grow-1 d-flex flex-column" role="document">
    <main class="content main flex-grow-1 px-5 d-flex">
      @yield('content')
      @if (App\display_sidebar_static())
      <aside class="sidebar" id="sidebar-static">
        @include('partials.sidebar-static')
      </aside>
      @endif
    </main>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer()
    @endphp
  </div>
</body>

</html>
