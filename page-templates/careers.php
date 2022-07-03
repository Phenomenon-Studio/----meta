<?php
/*
Template name: Careers
*/
?>

<?php include('header.php'); ?>

<main>
    <section class="primary">
        <picture class="primary__pic">
            <source srcset="<?php echo get_field('background_1_mob')['url']; ?>" media="(max-width: 479px)">
            <?php getImage(get_field('background_1')); ?>
        </picture>
        <div class="primary__holder">
            <div class="container h-full">
                <div class="flex items-center justify-center h-full">
                    <div class="w-full text-center">
                        <h1 class="color-white">
                            <?php the_field('heading_1'); ?>
                        </h1>
                        <div class="mt-30 xs-max:mt-25">
                            <?php getLink(get_field('link_1'), 'btn btn--primary'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-b indent-md-t">
        <div class="container">
            <div class="max-w-740 text-center sm-max:text-left mx-auto">
                <h3>
                    <?php the_field('heading_2'); ?>
                </h3>
            </div>
        </div>
    </section>

    <section class="indent-y">
        <div class="container">
            <div class="top-rounded top-rounded--monolith sm-max:none mb-60 md-max:mb-40">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-arc-solid"></use>
                </svg>
            </div>
            <div class="uppercase">
                <h2>
                    <?php the_field('heading_3'); ?>
                </h2>
            </div>
            <div class="dropdown-list tabs two-items mt-60 sm-max:mt-40" data-tabs>
                <div data-wrap-accordion>
                    <ul class="accordion dropdown-list__items mt-20 sm-max:mt-0">
                        <?php $i = 1;
                        if (get_field('accordeon')) : ?>
                            <?php while (the_repeater_field('accordeon')) : ?>
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
                                            <div class="dropdown-list__headline crs-pointer events-auto"><?php the_sub_field('title'); ?></div>
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
                                                            <?php getImage(get_sub_field('img')); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php $i++;
                            endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="sm-max:none">
                    <div class="dropdown-list__holder-panes tabs__holder">
                        <?php $i = 1;
                        if (get_field('accordeon')) : ?>
                            <?php while (the_repeater_field('accordeon')) : ?>
                                <div class="tabs__pane flex justify-end <?php if ($i == 1) { ?>is-active<?php } ?>" data-tabs-pane="<?= $i ?>">
                                    <div class="dropdown-list__pic w-full max-w-490">
                                        <div>
                                            <?php getImage(get_sub_field('img')); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;
                            endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-lg-y">
        <div class="container">
            <h2 class="uppercase">
                <?php the_field('heading_4'); ?>
            </h2>
            <ul class="cards-col-4 mt-80 sm-max:mt-40">
                <?php if (get_field('benefits')) : ?>
                    <?php while (the_repeater_field('benefits')) : ?>
                        <li class="card card--default">
                            <div>
                                <div class="card__icon">
                                    <?php getImage(get_sub_field('icon')); ?>
                                </div>
                                <div class="card__line line-title">
                                    <h4><?php the_sub_field('title'); ?></h4>
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
        </div>
    </section>

    <section class="image-map-wrap indent-t indent-md-b">
        <div class="container relative z-5">
            <div class="uppercase text-center sm-max:text-left">
                <h2>
                    <?php the_field('heading_5'); ?>
                </h2>
            </div>
        </div>
        <div class="image-map scroll-auto-x scrollbar-hidden dark">
            <div class="image-map__pic">
                <?php getImage(get_field('map')); ?>
            </div>
        </div>
        <div class="image-map scroll-auto-x scrollbar-hidden light">
            <div class="image-map__pic">
                <?php getImage(get_field('map_light')); ?>
            </div>
        </div>
    </section>

    <section class="indent-lg-b">
        <div class="container">
            <div class="max-w-740 xs-max:max-w-280 text-center mx-auto pt-45 sm-max:pt-20">
                <h3>
                    <?php the_field('heading_6'); ?>
                </h3>
                <div class="text text-md lh-160 mt-20">
                    <p><?php the_field('text_6'); ?></p>
                </div>
                <div class="mt-30 xs-max:mt-20">
                    <?php getLink(get_field('link_6'), 'btn btn--primary'); ?>
                </div>
            </div>
        </div>
    </section>
    
</main>

<?php include('footer.php'); ?>