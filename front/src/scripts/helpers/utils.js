// eslint-disable-next-line no-console
export const { warn, error } = console;

export const asyncEach = (array, cb, interval = 10) => {
    let time = Date.now();
    let i = 0;
    const last = array.length - 1;
    const next = () => {
        while (i <= last) {
            const now = Date.now();
            const diff = now - time;
            if (diff > interval) {
                time = now;
                setTimeout(next, 0);
                break;
            }
            cb(array[i], i++, array);
        }
    };
    next();
};

export const findDuplicate = (array, amount) =>
    array.filter((item, _, list) => list.filter(_item => _item === item).length >= amount);

export const removeDuplicate = array => [...new Set(array)];

export const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));

export const debounce = (cb, interval = 0) => {
    let debounceTimeoutId;
    return function (...args) {
        clearTimeout(debounceTimeoutId);
        debounceTimeoutId = null;
        debounceTimeoutId = setTimeout(() => cb.apply(this, args), interval);
    };
};

export const throttle = (cb, delay) => {
    let lastCall = 0;
    return function (...args) {
        const now = new Date().getTime();
        if (now - lastCall < delay) return;
        lastCall = now;
        return cb(...args);
    };
};

export const rAF = cb => {
    let globalID;
    let ticking = false;
    return function (...args) {
        if (!ticking) {
            cancelAnimationFrame(globalID);
            globalID = null;
            globalID = requestAnimationFrame(() => {
                ticking = false;
                return cb(...args);
            });
            ticking = true;
        }
    };
};

export const expirationDateInHours = hours => new Date(new Date().getTime() + hours * 60 * 60 * 1000);

export const prependChild = (parent, child) => parent.insertBefore(child, parent.firstElementChild);

export const getScrollbarWidth = () => {
    const outer = document.createElement('div');
    outer.style.visibility = 'hidden';
    outer.style.overflow = 'scroll';
    outer.style.msOverflowStyle = 'scrollbar';
    document.body.appendChild(outer);
    const inner = document.createElement('div');
    outer.appendChild(inner);
    const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;
    outer.parentNode.removeChild(outer);
    return scrollbarWidth;
};

export const hiddenScroll = () => {
    const scrollTop = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;
    document.documentElement.classList.add('no-scroll');
    document.documentElement.style.top = `${-scrollTop}px`;
};

export const visibleScroll = () => {
    const scrollTop = parseInt(document.documentElement.style.top);
    document.documentElement.classList.remove('no-scroll');
    document.documentElement.style.removeProperty('top');
    document.documentElement.scrollTop = -scrollTop;
    document.body.scrollTop = -scrollTop;
};

export const getViewportHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    return vh;
};

export const popupShower = (popup, method = false) => {
    if (method === 'show') {
        popup.removeAttribute('style');
        popup.classList.add('js-popup-opened');
        hiddenScroll();
    } else {
        popup.classList.remove('js-popup-opened');
        visibleScroll();
    }
};
