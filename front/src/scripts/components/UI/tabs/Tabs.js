export default class Tabs {
    constructor($tabs) {
        this.$tabs = $tabs;
        this.name = this.$tabs.getAttribute('data-tabs');
        this.paramLink = this.name ? `[data-tabs-link][data-tabs-name=${this.name}]` : '[data-tabs-link]';
        this.paramPane = this.name ? `[data-tabs-pane][data-tabs-name=${this.name}]` : '[data-tabs-pane]';
        this.$links = this.$tabs.querySelectorAll(this.paramLink);
        this.$panes = this.$tabs.querySelectorAll(this.paramPane);
        this.handler = this.handler.bind(this);
    }

    init() {
        this.$tabs.addEventListener('click', this.handler);
    }

    handler(e) {
        const $target = e.target.closest(this.paramLink);

        if ($target) {
            e.preventDefault();
            e.stopPropagation();

            this.$tabs.classList.contains('await-action') && this.$tabs.classList.remove('await-action');

            for (let i = 0; i < this.$links.length; i++) {
                $target !== this.$links[i]
                    ? this.$links[i].classList.remove('is-active')
                    : this.$links[i].classList.add('is-active');
            }

            for (let i = 0; i < this.$panes.length; i++) {
                $target.getAttribute('data-tabs-link') !== this.$panes[i].getAttribute('data-tabs-pane')
                    ? this.$panes[i].classList.remove('is-active')
                    : this.$panes[i].classList.add('is-active');
            }
        }
    }
}
