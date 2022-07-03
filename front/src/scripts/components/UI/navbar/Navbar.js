import { hiddenScroll, visibleScroll, getViewportHeight } from '@helpers/utils';
export default class Navbar {
    constructor($navbar, options = {}) {
        this.$navbar = $navbar;
        this.$menu = this.$navbar.querySelector('[data-menu]');
        this.$toggler = this.$navbar.querySelector('[data-menu-toggler]');
        this.options = options;
        this.emitter = this.options.emitter;
        this.handler = this.handler.bind(this);
        this.handleResize = this.handleResize.bind(this);
    }

    init() {
        this.$navbar.removeEventListener('click', this.handler);
        this.$navbar.addEventListener('click', this.handler);
        this.handleResize();
        this.emitter.on('page:resized', this.handleResize);
    }

    handler(e) {
        const $toggler = e.target.closest('[data-menu-toggler]') || null;

        if ($toggler) {
            $toggler.classList.toggle('is-active');
            this.$menu.classList.toggle('is-active');
            this.$menu.classList.contains('is-active') ? hiddenScroll() : visibleScroll();
        }
    }

    handleResize() {
        getViewportHeight();
    }

    destroy() {
        visibleScroll();
        this.$menu.classList.remove('is-active');
        this.$toggler.classList.remove('is-active');
        this.$navbar.removeEventListener('click', this.handler);
        this.emitter.off('page:resized', this.handleResize);
    }
}
