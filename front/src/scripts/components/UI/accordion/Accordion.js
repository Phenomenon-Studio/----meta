export default class Accordion {
    constructor($accordion) {
        this.$accordion = $accordion;
        this.isState = this.$accordion.hasAttribute('data-accordion-state') || null;
        this.name = $accordion.hasAttribute('data-accordion-mq') ? 'accordion-mq' : 'accordion';
        this.$item = this.$accordion.querySelector('[data-accordion-holder]');
        this.$wrap = this.$accordion.closest('[data-wrap-accordion]') || null;
        this.handler = this.handler.bind(this);
        this.transitionListener = this.transitionListener.bind(this);
    }

    init() {
        this.$item.removeEventListener('transitionend', this.transitionListener);
        this.$accordion.removeEventListener('click', this.handler);
        this.$accordion.addEventListener('click', this.handler);

        if (this.$accordion.classList.contains('is-open')) {
            this.$item.style.maxHeight = this.$item.scrollHeight + 'px';
        }
    }

    handler(e) {
        const $target = e.target.closest('[data-accordion-toggler]');

        if ($target) {
            const $noAnimationParent = $target.closest('.no-animation-accordion') || null;
            const state = this.$accordion.hasAttribute('[data-accordion-state]');

            if ($noAnimationParent) {
                $noAnimationParent.classList.remove('no-animation-accordion');
            }

            if (this.$wrap) {
                // NOTE: not target accordion hide
                this.$wrap.querySelectorAll(`[data-${this.name}].is-open`).forEach($el => {
                    if ($el !== this.$accordion) {
                        $el.classList.remove('is-open');
                        $el.hasAttribute('[data-accordion-state]') && $el.setAttribute('data-accordion-state', '');
                        this.hiddenAccordion($el.querySelector('[data-accordion-holder]'));
                    }
                });
            }

            if (this.isState) {
                state !== 'is-open' ? this.$accordion.classList.add('is-open') : null;
            } else if (!this.isState) {
                this.$accordion.classList.toggle('is-open');
            }

            if (this.$item.style.maxHeight || this.$item.classList.contains('is-open')) {
                const hasToggle = Boolean(state !== 'is-open' && !this.isState);
                hasToggle && this.hiddenAccordion(this.$item);
            } else {
                this.$item.addEventListener('transitionend', this.transitionListener);
                this.$item.style.maxHeight = this.$item.scrollHeight + 'px';
            }
            this.$accordion.removeEventListener('click', this.handler.bind(this));
        }
    }

    transitionListener() {
        this.$item.removeEventListener('transitionend', this.transitionListener);
        if (this.$accordion.classList.contains('is-open')) {
            this.$item.classList.add('is-open');
        }
        return false;
    }

    hiddenAccordion($item) {
        $item.classList.remove('is-open');
        $item.style.maxHeight = this.$item.scrollHeight + 'px';
        $item.removeAttribute('style');
    }

    destroy() {
        this.$accordion.removeEventListener('click', this.handler);
        this.$item.removeEventListener('transitionend', this.transitionListener);
        this.$accordion.classList.remove('is-open');
        this.$item.classList.remove('is-open');
        this.$item.removeAttribute('style');
    }
}
