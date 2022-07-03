import { EventEmitter } from '@helpers/EventEmitter';
import Popups from '@components/ui/Popups';
import { resizer } from '@helpers/resizer';
import Navbar from '@components/UI/navbar/Navbar';
import Accordion from '@components/UI/accordion/Accordion';
import { themeSwitch } from '@components/UI/themeSwitch';
import Slider from '@components/UI/slider/Slider';
import Validation from '@helpers/validation/Validation';
import Tabs from '@components/UI/tabs/Tabs';
import { initSelect } from '@/scripts/components/UI/form/customSelect';
import WatchFocus from '@components/UI/form/WatchFocus';
import { scrollToElemInit } from '@components/UI/scrollTo';
import { scrollTo } from '@helpers/animatedScrollTo';

const emitter = new EventEmitter();

// NOTE: Scroll to anchor
{
    const $anchors = document.body.querySelectorAll('[data-anchor]');

    if ($anchors.length) {
        const href = window.location.href;
        history.pushState('', '', window.location.pathname);
        for (let i = 0; i < $anchors.length; i++) {
            if (href.indexOf($anchors[i].dataset.anchor) !== -1) {
                const viewportCenter = $anchors[i].offsetTop + $anchors[i].offsetHeight / 2 - window.innerHeight / 2;
                scrollTo(document.documentElement, viewportCenter, 600);

                break;
            }
        }
    }
}

// NOTE: Popups
{
    const $popups = document.querySelectorAll('.popup');
    if ($popups.length) {
        const popups = new Popups($popups, {});
        popups.init();
    }
}

// NOTE: Navbar
{
    const $navbar = document.querySelector('[data-nav]') || null;

    if ($navbar) {
        let navbar = null;
        const mq = window.matchMedia('(max-width: 991px)');

        const checkMq = () => {
            if (mq.matches) {
                navbar?.destroy();
                navbar = new Navbar($navbar, { emitter });
                navbar.init();
            } else if (navbar !== null) {
                navbar?.destroy();
                navbar = null;
            }
        };

        checkMq();
        mq.addListener(checkMq);
    }
}

//NOTE: Form validation
{
    const $forms = document.querySelectorAll('[data-validation]');

    if ($forms.length) {
        for (let i = 0; i < $forms.length; i++) {
            new Validation($forms[i], {}).init();
        }
    }
}

// NOTE: Tabs
{
    const $tabs = document.querySelectorAll('[data-tabs]');

    if ($tabs.length) {
        for (let i = 0; i < $tabs.length; i++) {
            new Tabs($tabs[i]).init();
        }
    }
}

// NOTE: Slider
{
    const $sliders = document.querySelectorAll('[data-slider]');

    if ($sliders.length) {
        $sliders.forEach($slider => {
            new Slider($slider).init();
        });
    }
}

// NOTE: Slider media query
{
    const $sliders = document.querySelectorAll('[data-slider-mq]');

    if ($sliders.length) {
        $sliders.forEach($slider => {
            let swiper = null;
            const mq = window.matchMedia(`(max-width: ${$slider.dataset.sliderMq}px)`);

            const checkMq = () => {
                if (mq.matches) {
                    $slider.removeAttribute('class');
                    $slider.classList.add('swiper-container');
                    swiper = new Slider($slider);
                    swiper.init();
                } else if (swiper !== null) {
                    $slider.removeAttribute('class');
                    $slider.classList.remove('swiper-container');
                    swiper.destroy();
                    swiper = null;
                }
            };

            checkMq();
            mq.addListener(checkMq);
        });
    }
}

//NOTE: Accordion
{
    const $accordions = document.querySelectorAll('[data-accordion]');

    if ($accordions.length) {
        for (let i = 0; i < $accordions.length; i++) {
            new Accordion($accordions[i]).init();
        }
    }
}

// NOTE: Theme switcher
{
    const $switcher = document.querySelector('[data-theme-switcher]') || null;

    if ($switcher) {
        themeSwitch($switcher);
    }
}

// NOTE: Selects
{
    const $selects = document.body.querySelectorAll('[data-select]');

    if ($selects.length) {
        initSelect($selects, emitter);
    }
}

// NOTE: Watch focus on input
{
    const $forms = document.body.querySelectorAll('[data-watch-form]');

    if ($forms.length) {
        for (let i = 0; i < $forms.length; i++) {
            new WatchFocus($forms[i]).init();
        }
    }
}

// NOTE: Scroll to
{
    const $scrollTo = document.body.querySelectorAll('[data-scroll-to]');

    if ($scrollTo.length) {
        scrollToElemInit();
    }
}

// Resize function
resizer({ emitter, ms: 50 });
