<?php
/*
Template name: Partners
*/
?>

<?php include('header.php'); ?>

<main>

    <section class="primary primary--secondary">
        <picture class="primary__pic">
            <source srcset="<?php echo get_field('background_1_mob')['url']; ?>" media="(max-width: 479px)">
            <?php getImage(get_field('background_1')); ?>
        </picture>
        <div class="primary__holder">
            <div class="container h-full">
                <div class="flex items-center justify-center h-full">
                    <div class="w-full text-center max-w-740">
                        <h1 class="color-white">
                            <?php the_field('heading_1'); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-b mt-90 sm-max:mt-75">
        <div class="container">
            <div class="max-w-600 sm-max:max-w-none text-center sm-max:text-left mx-auto">
                <h3>
                    <?php the_field('heading_2'); ?>
                </h3>
                <div class="text text-md lh-160 mt-20">
                    <p>
                        <?php the_field('text_2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-t indent-lg-b">
        <div class="container" data-slider-wrap>
            <div class="flex items-center justify-between">
                <div class="uppercase">
                    <h2>
                        <?php the_field('heading_3'); ?>
                    </h2>
                </div>
                <div class="slider-control sm-max:none ml-15">
                    <button type="button" class="swiper-button-prev">
                        <svg class="icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </button>
                    <button type="button" class="swiper-button-next">
                        <svg class="icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="slider-cards slider-cards--color slider-wrap mt-60 sm-max:mt-40">
                <div class="swiper-container" data-slider data-space-between="25:15">
                    <div class="swiper-wrapper">
                        <?php foreach (get_field('cases') as $case) { ?>
                            <div class="swiper-slide">
                                <div class="card card--rounded card--border">
                                    <div class="w-full">
                                        <div class="card__pic card__pic--secondary">
                                            <div>
                                                <?php if (get_the_post_thumbnail_url(pll_get_post($case))) { ?>
                                                    <img src="<?php echo get_the_post_thumbnail_url(pll_get_post($case)); ?>" alt="">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="card__content">
                                            <h5 class="card__title">
                                                <?php echo get_the_title(pll_get_post($case)); ?>
                                            </h5>
                                            <div class="text text-md lh-160 mt-5">
                                                <p><?php echo truncate(get_post_field('post_content', pll_get_post($case))); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-lg-y">
        <div class="container">
            <div class="two-items two-items--sm-reverse">
                <div>
                    <div class="pt-15 sm-max:pt-0 max-w-615">
                        <h3>
                            <?php the_field('heading_4'); ?>
                        </h3>
                        <div class="caption-block text text-md lh-160 mt-15 sm-max:mt-15">
                            <?php the_field('text_4'); ?>
                        </div>
                        <div class="mt-30">
                            <!-- need to update  -->
                            <?php
                            /*
                            <?php getLink(get_field('link_4'), 'btn btn--primary xs:w-full'); ?>
                            */
                            ?>

                            <a class="btn btn--primary xs:w-full" href="<?php echo get_field('link_4')['url']; ?>" data-scroll-to="<?php echo str_replace('#','',get_field('link_4')['url']); ?>"><?php echo get_field('link_4')['title']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="flex items-start justify-end sm-max:justify-start">
                    <div class="flex-image flex-image--square-3 w-full max-w-490">
                        <div class="flex-image__pic pic-rounded pic-rounded--70">
                            <?php getImage(get_field('image_4')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-lg-y">
        <div class="container">
            <div class="top-rounded top-rounded--monolith sm-max:none mb-60 md-max:mb-40">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-arc-solid"></use>
                </svg>
            </div>
            <div class="pt-25 sm-max:pt-0">
                <h2 class="uppercase">
                    <?php the_field('heading_5'); ?>
                </h2>
            </div>
            <ul class="cards-col-3 mt-80 sm-max:mt-40">
                <?php if (get_field('columns')) : ?>
                    <?php while (the_repeater_field('columns')) : ?>
                        <li class="card card--default">
                            <div class="w-full max-w-360">
                                <div class="card__icon">
                                    <?php getImage(get_sub_field('icon')); ?>
                                </div>
                                <div class="card__line line-title">
                                    <div class="max-w-265 xs-max:max-w-none">
                                        <h4>
                                            <?php the_sub_field('title'); ?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="text text-md lh-160 mt-20 sm-max:mt-15">
                                    <p>
                                        <?php the_sub_field('text'); ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="bottom-rounded bottom-rounded--monolith sm-max:none mt-80 md-max:mt-40">
                <svg class="bottom-rounded__icon">
                    <use xlink:href="#icon-arc-solid"></use>
                </svg>
            </div>
        </div>
    </section>

    <section class="partners indent-lg-y">
        <div class="container">
            <div>
                <div class="flex sm-max:block">
                    <div class="w-full min-w-300 max-w-385 sm-max:max-w-none flex flex-col mr-24 sm-max:mr-0">
                        <div class="flex-auto flex items-start min-h-0 pr-20 sm-max:pr-0">
                            <h2 class="uppercase">
                                <?php the_field('heading_6'); ?>
                            </h2>
                        </div>
                        <div class="bottom-line pt-60 sm-max:none"></div>
                    </div>
                    <div class="flex-auto flex flex-col min-w-none sm-max:mt-20">
                        <div class="text text-md lh-160 flex-auto flex items-center min-h-0">
                            <p>
                                <?php the_field('text'); ?>
                            </p>
                        </div>
                        <div class="bottom-line pt-60 sm-max:none"></div>
                    </div>
                </div>
            </div>
            <div class="partners__holder partners__holder--secondary">
                <div class="slider-wrap">
                    <div data-slider-mq="767">
                        <div class="swiper-wrapper">
                            <?php if (get_field('partners')) : ?>
                                <?php while (the_repeater_field('partners')) : ?>
                                    <div class="swiper-slide">
                                        <div class="partners__pic">
                                            <div class="dark h-full">
                                                <?php getImage(get_sub_field('img')); ?>
                                            </div>
                                            <div class="light h-full">
                                                <?php getImage(get_sub_field('img_2')); ?>
                                            </div>
                                        </div>
                                        <div class="max-w-305 mt-35 sm-max:mt-30">
                                            <h5><?php the_sub_field('title'); ?></h5>
                                            <div class="mt-10 sm-max:mt-15 text text-md lh-160">
                                                <p>
                                                    <?php the_sub_field('text'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-lg-y">
        <div class="container" data-slider-wrap>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="uppercase">
                        <?php the_field('heading_7'); ?>
                    </h2>
                    <div class="mt-20">
                        <div class="subtitle-secondary">
                            <?php the_field('text_7'); ?>
                        </div>
                    </div>
                </div>
                <div class="slider-control sm-max:none ml-10">
                    <button type="button" class="swiper-button-prev">
                        <svg class="icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </button>
                    <button type="button" class="swiper-button-next">
                        <svg class="icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="slider-roadmap slider-wrap mt-60 sm-max:mt-40">
                <div class="swiper-container h-full" data-slider data-space-between="60:20">
                    <div class="swiper-wrapper h-full">
                        <?php foreach (get_field('posts') as $post) { ?>
                            <div class="swiper-slide slider-roadmap__item h-full">
                                <div>
                                    <h4><?php echo get_the_title(pll_get_post($post)); ?></h4>
                                    <?php echo get_post_field('post_content', pll_get_post($post)); ?>
                                </div>
                                <div class="slider-roadmap__pic <?php if (!get_the_post_thumbnail_url(pll_get_post($post))) {
                                                                    echo 'empty';
                                                                } ?>">
                                    <?php if (get_the_post_thumbnail_url(pll_get_post($post))) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(pll_get_post($post)); ?>" alt="">
                                    <?php } ?>
                                    <?php if (!get_the_post_thumbnail_url(pll_get_post($post))) { ?>
                                        <div class="slider-roadmap__plug">
                                            <svg>
                                                <use xlink:href="#icon-image"></use>
                                            </svg>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>

    <section class="indent-md-y" id="contact_form" data-anchor="#contact_form">
        <div class="container">
            <div class="top-rounded top-rounded--monolith sm-max:none mb-60 md-max:mb-40">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-arc-solid"></use>
                </svg>
            </div>
            <div class="two-items two-items--sm-reverse pt-15 sm-max:pt-0">
                <div>
                    <div class="max-w-450">
                        <h3 class="title-secondary">
                            <?php the_field('heading_8'); ?>
                        </h3>
                    </div>
                    <form autocomplete="off" action="/?form-action=contact_form" method="POST" class="form mt-40" data-ajax data-watch-form data-wait-success="message-success" data-validation novalidate>
                        <input type="hidden" name="form-action" value="contact_form">
                        <div class="form__row">
                            <div>
                                <div class="form__control" data-form-control>
                                    <label>
                                        <input type="text" name="name" data-watch-input required autocomplete="off">
                                        <span class="form__placeholder" data-placeholder><?php echo get_field('form')['input_1']; ?></span>
                                        <div class="form__line"></div>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="form__control" data-form-control>
                                    <label>
                                        <input type="email" name="email" data-watch-input required autocomplete="off">
                                        <span class="form__placeholder" data-placeholder><?php echo get_field('form')['input_2']; ?></span>
                                        <div class="form__line"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form__group form__row">
                            <div>
                                <div class="form__control" data-form-control>
                                    <select class="select" name="industry" data-select required>
                                        <?php foreach (explode(PHP_EOL, get_field('form')['select_1_values']) as $value) { ?>
                                            <?php
                                            $val = explode(':', $value);
                                            $title = $val[1];
                                            $key = $val[0];
                                            if (empty($key) || !isset($key)) {
                                            ?>
                                                <option value="" selected hidden><?php echo $title; ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $key; ?>"><?php echo $title; ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <span class="form__placeholder" data-placeholder><?php echo get_field('form')['select_1_placeholder']; ?></span>
                                    <div class="form__line"></div>
                                </div>
                            </div>
                            <div>
                                <div class="form__control" data-form-control>
                                    <select class="select" name="role" data-select required>
                                        <?php foreach (explode(PHP_EOL, get_field('form')['select_2_values']) as $value) { ?>
                                            <?php
                                            $val = explode(':', $value);
                                            $title = $val[1];
                                            $key = $val[0];
                                            if (empty($key) || !isset($key)) {
                                            ?>
                                                <option value="" selected hidden><?php echo $title; ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $key; ?>"><?php echo $title; ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <span class="form__placeholder" data-placeholder><?php echo get_field('form')['select_2_placeholder']; ?></span>
                                    <div class="form__line"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form__control" data-form-control>
                                <label>
                                    <input type="text" name="message" data-watch-input required autocomplete="off">
                                    <span class="form__placeholder" data-placeholder><?php echo get_field('form')['textarea']; ?></span>
                                    <div class="form__line"></div>
                                </label>
                            </div>
                        </div>
                        <div class="mt-40">
                            <button type="submit" class="btn btn--primary xs:w-full min-w-160">
                                <?php echo get_field('form')['button']; ?>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex items-start justify-end sm-max:justify-start">
                    <div class="w-full max-w-480">
                        <?php getImage(get_field('image_8')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>

<div id="popup-message-success" class="popup" style="display: none;">
    <div class="popup__overlay" data-popup-close></div>
    <div class="popup__wrap">
        <button type="button" class="popup__close" data-popup-close>
            <svg>
                <use xlink:href="#icon-cross" />
            </svg>
        </button>
        <div class="flex flex-col items-center">
            <div class="popup__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-6.png" alt="" loading="lazy">
            </div>
            <div class="w-full max-w-250 text-center mx-auto">
                <h3>
                    Thanks for your message!
                </h3>
            </div>
        </div>
    </div>
</div>