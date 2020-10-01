<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header')
  <div class="wrap container-main" role="document">
    @if (App\display_sidebar())
    <aside class="sidebar" id="sidebar-main">
      @include('partials.sidebar')
    </aside>
    @endif
    <main class="content main">
      @yield('content')
    </main>
  </div>
  @php do_action('get_footer')
  @endphp
  @include('partials.footer')
  @php wp_footer()
  @endphp
  </body>

</html>
