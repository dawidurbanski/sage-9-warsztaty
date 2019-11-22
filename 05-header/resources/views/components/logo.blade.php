@if (function_exists('the_custom_logo'))
  <div class="c-logo">
    @if (has_custom_logo())
      @php the_custom_logo() @endphp
    @else
      <a class="c-brand" href="{{ home_url('/') }}">
        {{ get_bloginfo('name', 'display') }}
      </a>
    @endif
  </div>
@endif
