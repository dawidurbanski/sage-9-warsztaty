<div class="c-hero__content u-flex u-flex-center">
  <div>
    <h1 class="c-hero__title">{{ $hero->title }}</h1>
    <p class="c-hero__lead">
      @include('components.highlight-text', [
        'before' => $hero->destination->name,
        'price' => $hero->price_from
      ])
    </p>

    <a href="{{ $hero->url }}" class="c-button c-button--outline-light">
      {{ __('Sprawdź ofertę', 'sage') }}
    </a>
  </div>
</div>
{!! $hero->background !!}
