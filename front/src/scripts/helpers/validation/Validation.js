import { validator, messages } from '@helpers/validation/validator';
import { createError, removeError, isValid, resetFormElements } from '@helpers/validation/function.validation';
import { warn, popupShower } from '@helpers/utils';
import { api, generateCancelRequest } from '@helpers/axios';
import { TEXT_ERROR_MESSAGE } from '@helpers/constants';

export default class Validation {
    constructor($form, options = {}) {
        this.$form = $form;
        this.$popupSuccess = null;
        this.$btnSubmit = $form.querySelector('[type="submit"]');
        this.$inputs =
            [...this.$form.querySelectorAll('[required]')].map($el => {
                return {
                    name: $el.name,
                    isTouched: false,
                    isValid: null,
                    isEmpty: $el.value.trim().length ? false : true,
                    target: $el,
                };
            }) || [];
        this.options = options;
        this.requestCancel = { cancel: null };
        this.formData = null;
        this.handlerSubmit = this.handlerSubmit.bind(this);
        this.handlerInput = this.handlerInput.bind(this);
        this.handlerFocusout = this.handlerFocusout.bind(this);
        this.handlerChange = this.handlerChange.bind(this);
        this.transitionendHandler = this.transitionendHandler.bind(this);
    }

    init() {
        this.$form.addEventListener('submit', this.handlerSubmit);
        this.$form.addEventListener('input', this.handlerInput);
        this.$form.addEventListener('change', this.handlerChange);
        this.$form.addEventListener('focusout', this.handlerFocusout);
        this.$form.addEventListener('focusin', this.handlerFocusin);
    }

    async handlerSubmit(e) {
        e.preventDefault();
        const $form = e.target;
        const $popup = $form.closest('.popup') || null;

        if ($form.hasAttribute('data-wait-success')) {
            const namePopup = $form.getAttribute('data-wait-success');
            this.$popupSuccess = document.getElementById(`popup-${namePopup}`) || null;
        }

        if (isValid(this.$inputs)) {
            // console.log('is successfully!');
            // if ($form.hasAttribute('data-wait-success')) {
            //     this.$btnSubmit.setAttribute('disabled', true);
            //     console.log('is successfully!');

            //     setTimeout(() => {
            //         const $currentPopup = this.$form.closest('.popup.js-popup-opened');
            //         this.$inputs = [...resetFormElements(this.$inputs)];
            //         this.$form.reset();
            //         this.$btnSubmit.removeAttribute('disabled');
            //         $currentPopup.classList.remove('js-popup-opened');
            //         visibleScroll();
            //         this.$popupSuccess.classList.add('js-popup-opened');
            //         hiddenScroll();
            //     }, 1e3);
            // }
            if ($form.hasAttribute('data-ajax')) {
                const { action } = $form;

                this.$btnSubmit.setAttribute('disabled', true);
                this.formData = new FormData($form);

                const { cancelToken, isCancel } = generateCancelRequest(this.requestCancel);

                try {
                    const { status, statusText } = await api.post(action, this.formData, { cancelToken });

                    if (status === 200 || statusText.toLowerCase() === 'ok') {
                        $form.reset();
                        this.$inputs = [...resetFormElements(this.$inputs)];
                        this.$btnSubmit.removeAttribute('disabled');
                        this.formData = null;

                        if ($popup) {
                            $popup.addEventListener('transitionend', this.transitionendHandler);
                            popupShower($popup, 'hide');
                        } else {
                            this.$popupSuccess && popupShower(this.$popupSuccess, 'show');
                        }
                    }
                } catch (error) {
                    if (isCancel(error)) {
                        return;
                    }
                    this.$btnSubmit.removeAttribute('disabled');
                    this.formData = null;
                    warn(error.message);
                    const { status, statusText } = error;
                    const errorStatusText = status && statusText ? `status: ${status} ${statusText}` : '';
                    alert(`${TEXT_ERROR_MESSAGE}\n${errorStatusText}`);
                }
            }
        }
    }

    handlerInput(e) {
        const isTarget = ['INPUT', 'TEXTAREA'].includes(e.target.nodeName);
        if (isTarget) {
            const $target = e.target;
            const { name } = $target;
            const correctInput = this.$inputs.find($el => $el.name === name) || null;
            if (correctInput) {
                correctInput.isTouched = true;
                if (correctInput.isValid !== null) {
                    if ($target.value.trim().length) {
                        if (typeof validator[name] === 'function') {
                            if (validator[name]($target.value)) {
                                removeError($target);
                                correctInput.isValid = true;
                            } else {
                                createError($target, messages[name]);
                                correctInput.isValid = false;
                            }
                        } else if (!validator[name]) {
                            removeError($target);
                            correctInput.isValid = true;
                        }
                    } else if (!$target.value.trim().length) {
                        createError($target);
                        correctInput.isValid = false;
                    }
                }
            }
        }
    }

    handlerFocusout(e) {
        const isTarget = ['INPUT', 'TEXTAREA'].includes(e.target.nodeName);
        if (isTarget) {
            const $target = e.target;
            const { name } = $target;
            const correctInput = this.$inputs.find($el => $el.name === name) || null;
            removeError($target);
            if (correctInput && correctInput.isTouched) {
                if (typeof validator[name] === 'function' && $target.value.trim().length) {
                    if (validator[name]($target.value)) {
                        removeError($target);
                        correctInput.isValid = true;
                    } else {
                        createError($target, messages[name]);
                        correctInput.isValid = false;
                    }
                    return;
                } else if (!$target.value.trim().length) {
                    createError($target);
                    correctInput.isValid = false;
                    return;
                }
                correctInput.isValid = true;
            }
        }
    }

    handlerChange(e) {
        const isTarget = ['SELECT'].includes(e.target.nodeName);
        if (isTarget) {
            const $target = e.target;
            const { name } = $target;
            const correctTarget = this.$inputs.find($el => $el.name === name) || null;

            if (correctTarget && $target.value.trim().length) {
                correctTarget.isTouched = true;
                correctTarget.isValid = true;
                removeError($target);
            }
        }
    }

    transitionendHandler(e) {
        if (e.target.classList.contains('popup') && !e.target.classList.contains('js-popup-opened')) {
            e.target.removeEventListener('transitionend', this.transitionendHandler);
            this.$popupSuccess && popupShower(this.$popupSuccess, 'show');
        }
    }

    destroy() {
        this.$form.removeEventListener('submit', this.handlerSubmit);
        this.$form.removeEventListener('input', this.handlerInput);
        this.$form.removeEventListener('blur', this.handlerFocusout);
    }
}
