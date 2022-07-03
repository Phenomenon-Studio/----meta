import { scrollTo } from '@helpers/animatedScrollTo';

export const scrollToElemInit = () => {
    document.body.addEventListener('click', e => {
        const $target = e.target.closest('[data-scroll-to]') || null;

        if ($target) {
            e.preventDefault();

            const name = $target.getAttribute('data-scroll-to');
            const $element = document.getElementById(name) || null;

            if ($element) {
                const viewportCenter = $element.offsetTop + $element.offsetHeight / 2 - window.innerHeight / 2;
                scrollTo(document.documentElement, viewportCenter, 600);
            }
        }
    });
};
