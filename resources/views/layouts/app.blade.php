<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('d-flex flex-column min-vh-100') @endphp>
  @php do_action('get_header')
  @endphp
  @if (is_single())
    @include('partials.header')
  @else
    @include('partials.header-static')
  @endif
  <div class="wrap container-main flex-grow-1" style="overflow: hidden;" role="document">
    <main class="content main @if (!is_single()) pt-4 @endif">
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
