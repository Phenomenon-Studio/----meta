<?php
/*
Template name: Meta artist
*/
?>
<?php include 'header.php'; ?>

<section class="primary artist">
    <picture class="primary__pic xs-max:none">
        <source srcset="<?php echo get_field('background_1_mob')['url']; ?>" media="(max-width: 479px)">
        <?php getImage(get_field('background_1')); ?>
    </picture>
    <div class="artist__slider none xs-max:block h-full">
        <div data-slider-mq="479" data-slider-wrap>
            <div class="swiper-wrapper h-full">
                <?php if (get_field('background_1_slider')) : ?>
                    <?php while (the_repeater_field('background_1_slider')) : ?>
                        <div class="swiper-slide">
                            <?php getImage(get_sub_field('img')); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-pagination main-pagination" data-slider-pagination></div>
        </div>
    </div>

    <div class="primary__holder">
        <div class="container h-full">
            <div class="artist-title-container flex items-center justify-center relative">
                <div class="primary__content max-w-385">
                    <h1 class="color-white text-center"><?php the_field('heading_1'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="indent-t">
    <div class="container flex flex-col items-center">
        <div class="max-w-800 text-center sm-max:text-left mx-auto">
            <h3>
                <?php the_field('heading_2'); ?>
            </h3>
        </div>
        <div class="w-full flex justify-center">
            <div class="btns-group mt-40 xs-max:mt-25 xs:w-full">
                <!-- need to update  -->
                <?php
                /*
                <?php getLink(get_field('link_1_3'), 'btn btn--primary'); ?>
                <?php getLink(get_field('link_2_3'), 'btn btn--outline'); ?>
                */
                ?>

                <a class="btn btn--primary" href="<?php echo get_field('link_1_3')['url']; ?>" data-scroll-to="<?php echo str_replace('#','',get_field('link_1_3')['url']); ?>">
                    <?php echo get_field('link_1_3')['title']; ?>
                </a>
                <a class="btn btn--outline" href="<?php echo get_field('link_2_3')['url']; ?>" data-scroll-to="<?php echo str_replace('#','',get_field('link_2_3')['url']); ?>">
                    <?php echo get_field('link_2_3')['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="indent-lg-y">
    <div class="container">
        <div>
            <h2 class="uppercase"><?php the_field('heading_3'); ?></h2>
            <div class="text text-md lh-160 max-w-600 mt-20">
                <p>
                    <?php the_field('text_3'); ?>
                </p>
            </div>
        </div>
        <div class="top-rounded top-rounded--monolith sm-max:none mt-80">
            <svg class="top-rounded__icon">
                <use xlink:href="#icon-arc-solid"></use>
            </svg>
        </div>
        <div class="dropdown-list tabs two-items mt-40 sm-max:mt-0" data-tabs>
            <div class="sm-max:none">
                <div class="dropdown-list__holder-panes tabs__holder">
                    <?php
                    $i = 1;
                    if (get_field('accordeons')) : ?>
                        <?php while (the_repeater_field('accordeons')) : ?>
                            <div class="tabs__pane flex justify-start <?php if (
                                                                            $i == 1
                                                                        ) { ?>is-active<?php } ?>" data-tabs-pane="<?= $i ?>">
                                <div class="dropdown-list__pic w-full max-w-490">
                                    <div>
                                        <?php getImage(get_sub_field('image')); ?>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif;
                    ?>
                </div>
            </div>
            <div data-wrap-accordion>
                <ul class="accordion dropdown-list__items mt-40">
                    <?php
                    $i = 1;
                    if (get_field('accordeons')) : ?>
                        <?php while (the_repeater_field('accordeons')) : ?>
                            <li class="accordion__item dropdown-list__item <?php if ($i == 1) { ?>is-open <?php } ?>" data-accordion data-accordion-state="<?php if ($i == 1) { ?>is-open <?php } ?>">
                                <div class="flex items-start events-none" data-accordion-toggler data-tabs-link="<?= $i ?>">
                                    <div class="dropdown-list__num">
                                        <div class="num-box crs-pointer events-auto">
                                            <svg>
                                                <use xlink:href="#icon-num-box"></use>
                                            </svg>
                                            <span><?php echo $i; ?></span>
                                        </div>
                                    </div>
                                    <div class="dropdown-list__head flex-auto">
                                        <div class="dropdown-list__headline crs-pointer events-auto"><?php the_sub_field('title'); ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-list__inner">
                                    <div class="accordion__holder <?php if ($i == 1) { ?>is-open <?php } ?>" data-accordion-holder>
                                        <div class="dropdown-list__holder">
                                            <div class="dropdown-list__content">
                                                <div class="text text-md lh-160">
                                                    <p>
                                                        <?php the_sub_field('text'); ?>
                                                    </p>
                                                </div>
                                                <div class="dropdown-list__pic w-full max-w-490 mt-25">
                                                    <div>
                                                        <?php getImage(get_sub_field('image')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="indent-lg-y">
    <div class="container tabs" data-tabs>
        <div class="two-items two-items mt-35 sm-max:mt-0 two-items--sm-gap-40">
            <h2 class="uppercase"><?php the_field('heading_4'); ?></h2>
            <div class="w-full max-w-600 flex items-center justify-between">
                <?php
                $i = 1;
                if (get_field('tabs')) : ?>
                    <?php while (the_repeater_field('tabs')) : ?>
                        <button class="feature-btn-container-button <?php if ($i == 1) {echo 'is-active';} ?>" data-tabs-link="<?= $i ?>"><?php the_sub_field('title'); ?></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif;
                ?>
            </div>
        </div>
        <div class="top-rounded top-rounded--monolith sm-max:none mt-40 mb-40 md-max:mb-40">
            <svg class="top-rounded__icon">
                <use xlink:href="#icon-arc-solid"></use>
            </svg>
        </div>

        <div class="feature-content-container tabs__holder">
            <?php
            $i = 1;
            if (get_field('tabs')) : ?>
                <?php while (the_repeater_field('tabs')) : ?>
                    <div class="tabs__pane <?php if ($i == 1) { ?>is-active<?php } ?>" data-tabs-pane="<?php echo $i; ?>">
                        <div class="two-items sm-max:mt-40 two-items--sm-gap-40">
                            <h4><?php the_sub_field('heading'); ?></h4>
                            <p class="text text-md lh-160">
                                <?php the_sub_field('text'); ?>
                            </p>
                        </div>
                        <div class="slider-wrap" data-slider-wrap>
                            <div data-slider-mq="767">
                                <div class="slider-pagination mt-30" data-slider-pagination></div>
                                <div class="swiper-wrapper feature-card-container flex justify-between">
                                    <div class="swiper-slide">
                                        <div class="feature-card flex flex-col justify-between items-center feature-card:hover">
                                            <div class="num-box crs-pointer events-auto">
                                                <svg>
                                                    <use xlink:href="#icon-num-box"></use>
                                                </svg>
                                                <span>1</span>
                                            </div>
                                            <img class="feature-card-image" width="386px" src="<?php echo get_sub_field(
                                                                                                    'block_1'
                                                                                                )['img']; ?>" />
                                            <div class="feature-card__description text text-md lh-160">
                                                <p>
                                                    <?php echo get_sub_field('block_1')['text']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="feature-card flex flex-col justify-between items-center feature-card:hover">
                                            <div class="num-box crs-pointer events-auto">
                                                <svg>
                                                    <use xlink:href="#icon-num-box"></use>
                                                </svg>
                                                <span>2</span>
                                            </div>
                                            <img class="feature-card-image" width="386px" src="<?php echo get_sub_field('block_2')['img']; ?>" />
                                            <div class="feature-card__description text text-md lh-160">
                                                <p>
                                                    <?php echo get_sub_field('block_2')['text']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="feature-card flex flex-col justify-between items-center feature-card:hover">
                                            <div class="num-box crs-pointer events-auto">
                                                <svg>
                                                    <use xlink:href="#icon-num-box"></use>
                                                </svg>
                                                <span>3</span>
                                            </div>
                                            <img class="feature-card-image" width="386px" src="<?php echo get_sub_field('block_3')['img']; ?>" />
                                            <div class="feature-card__description text text-md lh-160">
                                                <p>
                                                    <?php echo get_sub_field('block_3')['text']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif;
            ?>
        </div>
    </div>
</section>



<section class="faq indent-t">
    <div class="container">
        <div class="flex items-center justify-between">
            <h2 class="uppercase"><?php the_field('heading_5'); ?></h2>
            <a href="<?php echo get_field('link_5')['url']; ?>" class="link">
                <?php echo get_field('link_5')['title']; ?>
                <svg>
                    <use xlink:href="#icon-arrow-x"></use>
                </svg>
            </a>
        </div>
        <div class="faq__content">
            <ul class="faq__list">
                <?php if (get_field('left_block')) : ?>
                    <?php while (the_repeater_field('left_block')) : ?>
                        <li class="faq__item accordion__item" data-accordion>
                            <div class="faq__head crs-pointer flex items-start" data-accordion-toggler>
                                <button type="button" class="accordion__toggler"></button>
                                <div class="faq__headline"><?php the_sub_field('question'); ?></div>
                            </div>
                            <div class="accordion__holder" data-accordion-holder>
                                <div class="faq__holder text-md lh-160">
                                    <p>
                                        <?php the_sub_field('answer'); ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <ul class="faq__list">
                <?php if (get_field('right_block')) : ?>
                    <?php while (the_repeater_field('right_block')) : ?>
                        <li class="faq__item accordion__item" data-accordion>
                            <div class="faq__head crs-pointer flex items-start" data-accordion-toggler>
                                <button type="button" class="accordion__toggler"></button>
                                <div class="faq__headline"><?php the_sub_field('question'); ?></div>
                            </div>
                            <div class="accordion__holder" data-accordion-holder>
                                <div class="faq__holder text-md lh-160">
                                    <p>
                                        <?php the_sub_field('answer'); ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('templates/subscribe-form'); ?>


<?php include 'footer.php'; ?>