<section class="subscribe indent-y" id="subscribe_section">
    <div class="container">
        <div class="subscribe__holder top-two-line">
            <div class="flex items-center subscribe__item sm-max:mt-40">
                <div class="w-full max-w-390">
                    <div>
                        <h2 class="uppercase">
                            <?php the_field('heading_sb', 'options'); ?>
                        </h2>
                    </div>
                    <div class="text text-md lh-160 mt-20 sm-max:mt-25">
                        <p>
                            <?php the_field('text_sb', 'options'); ?>
                        </p>
                    </div>
                    <form action="?form-action=request" method="POST" class="form subscribe__form mt-40 sm-max:mt-30" data-validation data-ajax
                        data-watch-form data-wait-success="subscribe-success" novalidate>
                        <input type="hidden" name="form-action" value="request" hidden tabindex="-1">
                        <div class="subscribe__input">
                            <div class="form__control" data-form-control>
                                <div class="flex items-center mb-7">
                                    <label class="flex-auto">
                                        <input type="email" name="email" data-watch-input required
                                            autocomplete="off">
                                        <span class="form__placeholder" data-placeholder><?php the_field(
                                            'input_sb',
                                            'options'
                                        ); ?></span>
                                    </label>
                                    <div class="shrink-0 mr-10 sm-max:mr-0">
                                        <button type="submit" class="btn btn--primary xs:w-full">
                                            <?php the_field('button_sb', 'options'); ?>
                                        </button>
                                    </div>
                                </div>
                                <svg class="form__line">
                                    <use xlink:href="#icon-bottom-arc"></use>
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="subscribe__pic flex-auto flex-image">
                <picture class="flex-image__pic">
                    <source srcset="<?php echo get_field('image_sb_mob', 'options')[
                        'url'
                    ]; ?>" media="(max-width: 479px)">
                    <?php getImage(get_field('image_sb', 'options')); ?>
                </picture>
            </div>
        </div>
    </div>
</section>

<div id="popup-subscribe-success" class="popup" style="display: none;">
    <div class="popup__overlay" data-popup-close></div>
    <div class="popup__wrap">
        <button type="button" class="popup__close" data-popup-close>
            <svg>
                <use xlink:href="#icon-cross" />
            </svg>
        </button>
        <div class="flex flex-col items-center">
            <div class="popup__icon">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-21.png" alt="" loading="lazy">
            </div>
            <div class="w-full max-w-360 text-center mx-auto">
                <h3>You have subscribed to the newsletter!</h3>
            </div>
        </div>
    </div>
</div>