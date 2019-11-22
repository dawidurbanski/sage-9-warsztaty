export default class InlineSvg {
  constructor() {
    this.svgElements = Array.from(document.querySelectorAll('img.svg'));
  }

  execute() {
    return new Promise(resolve => {
      this.svgElements.forEach(x => {
        const src = x.hasAttribute('data-src')
          ? x.getAttribute('data-src')
          : x.src;

        this.getSvg(x, src);
      });

      setTimeout(() => {
        resolve(this.svgElements);
      }, 400);
    });
  }

  replace(source, target) {
    // add replaced image's ID to the new SVG
    if (typeof source.id !== 'undefined') {
      target.id = source.id;
    }

    // add replaced image's classes to the new SVG
    source.classList.forEach(x => {
      if (x === 'svg') {
        return;
      }
      target.classList.add(x);
    });

    target.classList.add('replaced-svg');

    // remove any invalid XML tags as per http://validator.w3.org
    target.removeAttribute('xmlns:a');

    // remove IDs from svg preventing from ID duplicates
    if (target && source.classList.contains('svg-remove-ids')) {
      target.querySelectorAll('*').forEach(el => {
        el.dataset.id = el.getAttribute('id');
        el.removeAttribute('id');
      });
    }

    // replace image with new SVG
    source.replaceWith(target);
  }

  getSvg(source, url) {
    const http = new XMLHttpRequest();
    http.open('GET', url, true);
    http.setRequestHeader('Content-Type', 'text/xml; charset=UTF-8');
    http.onload = () => {
      if (http.readyState === http.DONE && http.status === 200) {
        const target = http.responseXML.documentElement;
        this.replace(source, target);
      }
    };
    http.send(null);
  }
}
