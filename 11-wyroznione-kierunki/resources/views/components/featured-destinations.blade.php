@if ($destinations)
  <section class="c-featured-destinations">
    <div class="swiper-container js-swiper-destinations">
      <div class="swiper-wrapper c-featured-destinations__swiper-wrapper">
        @foreach ($destinations as $destination)
          <a class="c-featured-destination swiper-slide" href="{{ $destination->url }}">
            <div class="c-featured-destination__inner-wrapper">
              <footer class="c-featured-destination__footer">
                <h3 class="c-featured-destination__title">
                  {{ $destination->title }}
                </h3>

                @include('components.highlight-text', [
                  'class' => 'c-featured-destination__price',
                  'price' => $destination->price_from
                ])
              </footer>

              {!! $destination->background !!}
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endif
