<div class="c-hero {{ isset($hero) ? 'c-hero--with-content' : 'c-hero--minimal' }}">
  <div class="c-hero__wrapper">
    <header class="c-header js-sticky-header">
      <div class="o-container o-container--full u-flex u-flex-space-between u-flex-align-items-center">
        @include('components.logo')
        <div class="c-header__navigation u-flex u-flex-align-items-center">
          @include('components.navigation-primary')
          @include('components.navigation-icons')
        </div>
      </div>
    </header>
    @isset ($hero)
      @include('partials.hero')
    @endisset
  </div>
</div>
