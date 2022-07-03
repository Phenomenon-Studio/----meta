import { validator, messages } from '@helpers/validation/validator';

export const removeError = input => {
    const $formControl = input.closest('[data-form-control]') || null;
    if ($formControl) {
        input.classList.remove('error');
        const $error = $formControl.querySelector('span.error') || null;
        $error?.remove();
    }
};

export const createError = (input, message = '') => {
    removeError(input);
    const $formControl = input.closest('[data-form-control]');
    input.classList.add('error');
    const newError = document.createElement('span');
    newError.classList.add('error');
    newError.innerText = message ? message : messages.required;
    $formControl.append(newError);
};

export const isValid = $elements => {
    const isEveryValid = $elements.every(elem => elem.isValid === true);
    if (isEveryValid) {
        return true;
    } else {
        $elements
            .filter(elem => elem.isValid !== true)
            .forEach(el => {
                const { target, name } = el;
                el.isTouched = true;
                if (typeof validator[name] === 'function' && !validator[name](target.value)) {
                    if (target.value.trim().length) {
                        createError(target, messages[name]);
                        el.isValid = false;
                    } else if (!target.value.trim().length) {
                        createError(target);
                        el.isValid = false;
                    }
                    return false;
                } else if (!validator[name] && !target.value.trim().length) {
                    createError(target);
                    el.isValid = false;
                    return false;
                }
            });
        $elements[0]?.target?.focus();
        return false;
    }
};

export const resetFormElements = $elements => {
    return $elements.map(el => {
        const { target } = el;
        const isSelect = ['SELECT'].includes(target.nodeName) || null;

        if (isSelect) {
            const $niceSelect = target.nextElementSibling;
            $niceSelect.querySelector('.current').innerText = '';
        }

        const $formControl = target.closest('[data-form-control]') || null;

        if ($formControl) {
            $formControl.classList.remove('is-focus');
        }

        removeError(target);
        return { ...el, isTouched: false, isValid: null, isEmpty: target.value.trim().length ? false : true };
    });
};
