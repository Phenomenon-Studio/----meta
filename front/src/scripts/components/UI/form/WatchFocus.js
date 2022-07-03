export default class WatchFocus {
    constructor($form) {
        this.$form = $form;
        this.handleFocusin = this.handleFocusin.bind(this);
        this.handleFocusout = this.handleFocusout.bind(this);
        this.checkEmpty = this.checkEmpty.bind(this);
    }

    init() {
        this.checkEmpty();
        this.$form.addEventListener('focusin', this.handleFocusin);
        this.$form.addEventListener('focusout', this.handleFocusout);
    }

    handleFocusin(e) {
        const isTarget = ['INPUT', 'TEXTAREA'].includes(e.target.nodeName);

        if (isTarget) {
            const $control = e.target.closest('[data-form-control]');
            $control.classList.add('is-focus');
        }
    }

    handleFocusout(e) {
        const isTarget = ['INPUT', 'TEXTAREA'].includes(e.target.nodeName);

        if (isTarget) {
            const $target = e.target;
            if ($target.value !== '' || $target.validity.badInput) {
                return false;
            }
            const $control = $target.closest('[data-form-control]');
            $control.classList.remove('is-focus');
        }
    }

    checkEmpty() {
        this.$form.querySelectorAll('[data-watch-input]').forEach($input => {
            if ($input.value) {
                const $control = $input.closest('[data-form-control]');
                $control.classList.add('not-transition');
                $control.classList.add('is-focus');

                requestAnimationFrame(() => {
                    $control.classList.remove('not-transition');
                });
            }
        });
    }

    destroy() {
        this.$form.removeEventListener('focusin', this.handleFocusin);
        this.$form.removeEventListener('focusout', this.handleFocusout);
    }
}
