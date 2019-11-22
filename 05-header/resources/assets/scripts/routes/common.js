import InlineSvg from '../modules/InlineSvg';


// init

/**
 * Convert all images with class 'svg'
 * to inline svg code
 */
const inline = new InlineSvg();
window.sageSVGInlined = inline.execute();
