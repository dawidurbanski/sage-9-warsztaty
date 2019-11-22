<span class="c-highlight-text {{ $class }}">
  @isset($before)
    <span class="c-highlight-text__before-marker-text">
      {{ $before }} - {{ __('od', 'sage') }}
    </span>
  @endisset
  @if ($price)
    <strong class="c-highlight-text__marker">
      {{ $price }} zł
    </strong>
  @endif
</span>
