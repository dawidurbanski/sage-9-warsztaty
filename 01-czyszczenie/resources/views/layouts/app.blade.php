<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp

    <div class="c-site" role="document">
      @include('partials.header')

      <div class="c-site__content">
        <main class="main">
          @yield('content')
        </main>
      </div>

      @include('partials.footer')
    </div>

    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>
