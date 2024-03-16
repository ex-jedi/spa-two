// *==============================================================================
// ** Imports  **
// *==============================================================================

import * as Flickity from 'flickity';
import 'flickity-imagesloaded';

// *==============================================================================
// ** Imported  **
// *==============================================================================

import { addMenuListener, simpleFadeUp, simpleFadeRight, scrollTriggerRefresh } from './animations';
import { cookieWarning, consoleGreeting, currentNav } from './utils';

// *==============================================================================
// ** Page JS  **
// *==============================================================================

// ********** Flickity **********
const carousel = document.querySelector('.homepage-gallery');
const flkty = new Flickity(carousel, {
  imagesLoaded: true,
  autoPlay: 6000,
  prevNextButtons: false,
  wrapAround: true,
  selectedAttraction: 0.006,
  friction: 0.15,
});

const testimonialsWrapper = document.querySelector('.homepage-testimonials-text-wrapper');

const testimonialsParagraph = testimonialsWrapper.querySelectorAll('p');

testimonialsParagraph.forEach((paragraph) => paragraph.classList.add('simple-fade-right'));

// *=========================================
// ** Imports  **
// *=========================================

// ********** Animations **********
addMenuListener();
simpleFadeRight();
simpleFadeUp();
scrollTriggerRefresh();

// ********** Utils **********
cookieWarning();
consoleGreeting();
currentNav();
