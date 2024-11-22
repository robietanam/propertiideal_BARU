import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

import '@splidejs/splide/css';

new Splide('#splide', {
    type: 'loop', // Loop the carousel
    drag: 'free', // Enable free dragging
    focus: 'center', // Center the focused slide
    perPage: 3, // Show one slide at a time
    direction: 'ltr', // Set direction to top to bottom (vertical)
    height: '14rem',
    gap: '0.5rem',
    autoHeight: true,
    heightRatio: 0.5, // Adjust the height ratio of the carousel
    autoScroll: {
        speed: 0.5, // Speed of the scroll (slower for better effect)
    },
    arrows: false, // Optional: Hide navigation arrows
    pagination: false, // Optional: Hide pagination dots
}).mount({ AutoScroll });


new Splide('#splide-testimoni1', {
    type: 'loop', // Loop the carousel
    drag: 'free', // Enable free dragging
    focus: 'center', // Center the focused slide
    perPage: 6,
    direction: 'ltr', // Set direction to top to bottom (vertical)
    height: '14rem',
    gap: '0.5rem',
    autoHeight: true,
    fixedWidth: '28rem',
    heightRatio: 0.5, // Adjust the height ratio of the carousel
    autoScroll: {
        speed: -0.5, // Speed of the scroll (slower for better effect)
    },
    arrows: false, // Optional: Hide navigation arrows
    pagination: false, // Optional: Hide pagination dots
}).mount({ AutoScroll });


new Splide('#splide-testimoni2', {
    type: 'loop', // Loop the carousel
    drag: 'free', // Enable free dragging
    focus: 'center', // Center the focused slide
    perPage: 6, // Show one slide at a time
    direction: 'ltr', // Set direction to top to bottom (vertical)
    height: '14rem',
    gap: '0.5rem',
    autoHeight: true,
    fixedWidth: '28rem',
    heightRatio: 0.5, // Adjust the height ratio of the carousel
    autoScroll: {
        speed: 0.5, // Speed of the scroll (slower for better effect)
    },
    arrows: false, // Optional: Hide navigation arrows
    pagination: false, // Optional: Hide pagination dots
}).mount({ AutoScroll });
