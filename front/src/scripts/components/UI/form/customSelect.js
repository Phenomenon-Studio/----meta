import NiceSelect from 'nice-select2/dist/js/nice-select2';

const setFixedPos = select => {
    const { width, left, bottom } = select.getBoundingClientRect();
    const $dropdown = select.querySelector('.nice-select-dropdown');
    $dropdown.style.width = `${width}px`;
    $dropdown.style.position = 'fixed';
    $dropdown.style.left = `${left}px`;
    $dropdown.style.top = `${bottom}px`;
};

export const initSelect = ($selects, emitter) => {
    for (let i = 0; i < $selects.length; i++) {
        new NiceSelect($selects[i], { searchable: false });

        // select.el.addEventListener('change', e => {
        //     console.log(e);
        // });
    }

    $selects.forEach($select => {
        const $control = $select.closest('[data-form-control]');
        const $list = $control.querySelector('.nice-select-dropdown > .list');

        if ($select.value) {
            $control.classList.add('not-transition');
            $control.classList.add('is-focus');
            requestAnimationFrame(() => {
                $control.classList.remove('not-transition');
            });
        }

        if ($list.firstChild.innerText.trim() === '') {
            $list.removeChild($list.firstChild);
        }
    });

    emitter.on('page:resized', () => {
        document.querySelectorAll('.nice-select.is-fixed.open').forEach(select => {
            setFixedPos(select);
        });
    });

    window.addEventListener(
        'scroll',
        () => {
            document.querySelectorAll('.nice-select.is-fixed.open').forEach(select => {
                setFixedPos(select);
            });
        },
        false
    );

    document.body.addEventListener('click', e => {
        const $target = e.target.closest('.nice-select') || null;

        if ($target) {
            const $select = $target.previousElementSibling;
            if (!$select.value) {
                const $control = $target.closest('[data-form-control]');
                $control.classList.add('is-focus');
            }

            if ($target.classList.contains('open') && $target.classList.contains('is-fixed')) {
                [...$selects]
                    .filter($select => $select.classList.contains('is-fixed'))
                    .forEach(select => {
                        const $niceSelect = select.nextElementSibling;
                        const $dropdown = $niceSelect.querySelector('.nice-select-dropdown');
                        $dropdown.removeAttribute('style');
                    });
                setFixedPos($target);
            }
        } else {
            $selects.forEach($select => {
                if (!$select.value) {
                    const $control = $select.closest('[data-form-control]');
                    $control.classList.remove('is-focus');
                }
            });
        }
    });
};
