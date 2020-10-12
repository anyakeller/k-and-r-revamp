<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('static-page d-flex flex-column') @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header')
  <div class="wrap container-main flex-grow-1 d-flex py-4" role="document">
    <style>
      .content.main{
        max-width: 1000px;
      }
    </style>
    <main class="content main nowidthlimit d-flex flex-column px-4">
      @yield('content')
    </main>
    @if (App\display_sidebar_static())
    <aside class="sidebar" id="sidebar-static">
      @include('partials.sidebar-static')
    </aside>
    @endif
  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer()
  @endphp
</body>

</html>
