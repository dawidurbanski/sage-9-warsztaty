import { Swiper } from 'swiper/js/swiper.esm.js';
import debounce from '../util/debounce';
import getCssVariable from '../util/getCssVariable';

export default class FeaturedDestinationsSlider {
  constructor(elementSelector) {
    this.elementSelector = elementSelector;
    this.slider = null;
    this.destroyBreakpoint = getCssVariable('--breakpoint-lg');

    this.initSwiperOnMobile();
    window.addEventListener(
      'resize',
      debounce(() => this.toggleSlider(), 200)
    );
  }

  initSwiperOnMobile() {
    if (window.innerWidth > this.destroyBreakpoint) {
      return;
    }

    this.initSwiper();
  }

  toggleSlider() {
    if (window.innerWidth > this.destroyBreakpoint && this.slider !== null) {
      console.log('destroy', this.slider);
      this.slider.destroy();
      return;
    }

    if (window.innerWidth <= this.destroyBreakpoint) {
      console.log('init');
      this.initSwiper();
    }
  }

  initSwiper() {
    const breakpointSmall = getCssVariable('--breakpoint-sm');
    let breakpoints = {};

    breakpoints[breakpointSmall] = {
      slidesPerView: 2,
    };

    this.slider = new Swiper(this.elementSelector, {
      speed: 400,
      breakpoints: breakpoints,
    });
  }
}
