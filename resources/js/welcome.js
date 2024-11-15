
import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

import '@splidejs/splide/css';

new Splide('#splide', {
    type: 'loop', // Loop the carousel
    drag: 'free', // Enable free dragging
    focus: 'center', // Center the focused slide
    perPage: 1, // Show one slide at a time
    direction: 'ttb', // Set direction to top to bottom (vertical)
    height: '28rem',
    gap: '1rem',
    autoHeight: true,
    heightRatio: 0.5, // Adjust the height ratio of the carousel
    autoScroll: {
        speed: 1, // Speed of the scroll (slower for better effect)
    },
    arrows: false, // Optional: Hide navigation arrows
    pagination: false, // Optional: Hide pagination dots
}).mount({ AutoScroll });

new Splide('#splide2', {
    type: 'loop', // Loop the carousel
    drag: 'free', // Enable free dragging
    focus: 'center', // Center the focused slide
    perPage: 1, // Show one slide at a time
    direction: 'ttb', // Set direction to top to bottom (vertical)
    height: '28rem',
    gap: '1rem',
    autoHeight: true,
    heightRatio: 0.5, // Adjust the height ratio of the carousel
    autoScroll: {
        speed: -1, // Speed of the scroll (slower for better effect)
    },
    arrows: false, // Optional: Hide navigation arrows
    pagination: false, // Optional: Hide pagination dots
}).mount({ AutoScroll });