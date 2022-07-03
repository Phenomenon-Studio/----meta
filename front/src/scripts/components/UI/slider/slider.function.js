export const navigation = $slider => ({
    prevEl: $slider.closest('[data-slider-wrap]')?.querySelector('.swiper-button-prev'),
    nextEl: $slider.closest('[data-slider-wrap]')?.querySelector('.swiper-button-next'),
});

export const pagination = $slider => ({
    el: $slider.closest('[data-slider-wrap]')?.querySelector('[data-slider-pagination]'),
    // type: 'fraction',
    clickable: true,
    // renderFraction: (currentClass, totalClass) => `
    //         <span class="${currentClass}"></span>
    //         <span> / </span>
    //         <span class="${totalClass}"></span>`,
});

export const breakpoints = spaceBetween => ({
    768: {
        spaceBetween,
    },
});
