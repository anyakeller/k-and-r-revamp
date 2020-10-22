<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('static-page d-flex flex-column') @endphp>
  @php do_action('get_header')
  @endphp
  @include('partials.header-static')
  <div class="wrap container-main flex-grow-1 py-4" role="document">
    <style>
      .content.main{
        max-width: 1000px;
      }
    </style>
    <main class="content main nowidthlimit px-1 px-md-4">
      @yield('content')
    </main>
  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer()
  @endphp
</body>

</html>
