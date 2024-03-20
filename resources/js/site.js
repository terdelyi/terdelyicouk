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
import './toggle.js';

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('typescript', typescript);
hljs.registerLanguage('css', css);
hljs.registerLanguage('xml', xml);
hljs.registerLanguage('php', php);
hljs.registerLanguage('csharp', csharp);
hljs.registerLanguage('bash', bash);

hljs.highlightAll();

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuShow = document.getElementById('mobile-menu-show');
    const mobileMenuHide = document.getElementById('mobile-menu-hide');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuShow.addEventListener('click', () => {
        mobileMenuShow.classList.toggle('hidden');
        mobileMenuHide.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
    });

    mobileMenuHide.addEventListener('click', () => {
        mobileMenuHide.classList.toggle('hidden');
        mobileMenuShow.classList.toggle('hidden');
        mobileMenu.classList.toggle('hidden');
    })
})