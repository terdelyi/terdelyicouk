import '../css/site.css';
import 'highlight.js/styles/github.css';

import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import typescript from 'highlight.js/lib/languages/typescript';
import css from 'highlight.js/lib/languages/css';
import xml from 'highlight.js/lib/languages/xml';
import php from 'highlight.js/lib/languages/php';
import csharp from 'highlight.js/lib/languages/csharp';
import bash from 'highlight.js/lib/languages/bash';
import MobileMenu from "./modules/MobileMenu";
import ToggleSwitch from "./modules/ToggleSwitch";

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('typescript', typescript);
hljs.registerLanguage('css', css);
hljs.registerLanguage('xml', xml);
hljs.registerLanguage('php', php);
hljs.registerLanguage('csharp', csharp);
hljs.registerLanguage('bash', bash);

hljs.highlightAll();

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = new MobileMenu(document.getElementById('mobile-menu'));
    document.getElementById('mobile-menu-show').addEventListener('click', (event) => mobileMenu.toggle(event.currentTarget, document.getElementById('mobile-menu-hide')));
    document.getElementById('mobile-menu-hide').addEventListener('click', (event) => mobileMenu.toggle(event.currentTarget, document.getElementById('mobile-menu-show')));

    const toggleSwitch = new ToggleSwitch(document.getElementById('toggle-switch-on'), document.getElementById('toggle-switch-off'));
    document.getElementById('toggle-switch').addEventListener('click', () => toggleSwitch.toggle());
});