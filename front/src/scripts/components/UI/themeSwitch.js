import { Cookie } from '@components/cookie/Cookie';

const removeClasses = body => {
    ['theme-dark', 'theme-light'].forEach(cls => {
        body.classList.remove(cls);
    });
};

export const themeSwitch = $switchHolder => {
    const body = document.body;

    $switchHolder.addEventListener('change', e => {
        const isTarget = Boolean(e.target.nodeName === 'INPUT' && e.target?.type === 'radio');
        const $target = isTarget && e.target;

        if ($target && $target.checked) {
            const { name, value } = $target;
            removeClasses(body);
            body.classList.add(`${name}-${value}`);
            Cookie.setCookie(name, value);
        }
    });
};
