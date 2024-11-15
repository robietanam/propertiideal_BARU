import Aos from 'aos';
import './bootstrap';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';

Alpine.start();

window.Alpine = Alpine;

Aos.init({
    once: true,
});
