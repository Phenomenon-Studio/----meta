<?php
/*
Template name: About
*/
$_GET['header_classes'] = 'header--light';
?>

<?php include('header.php'); ?>

<main>

    <section class="about-primary">
        <div class="container">
            <div class="flex justify-center h-full">
                <div class="w-full max-w-500 text-center">
                    <h1 class="lh-140">
                        <?php the_field('heading_1'); ?>
                    </h1>
                </div>
            </div>
            <div class="mx-auto max-w-1024 sm-max:mt-30">
                <picture>
                    <source srcset="<?php echo get_field('img_1_mob')['url']; ?>" media="(max-width: 767px)">
                    <?php getImage(get_field('img_1')); ?>
                </picture>
            </div>
        </div>
    </section>

    <section class="indent-lg-b">
        <div class="container">
            <div class="top-rounded">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-line-round"></use>
                </svg>
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-line-round"></use>
                </svg>
                <svg class="top-rounded__icon-mob">
                    <use xlink:href="#icon-top-arc"></use>
                </svg>
            </div>
            <div class="flex mt-90 sm-max:mt-70">
                <div class="w-full max-w-490">
                    <div class="line-title uppercase">
                        <h2>
                            <?php the_field('heading_2'); ?>
                        </h2>
                    </div>
                    <div class="caption-block text text--md lh-160 mt-20 sm-max:mt-20">
                        <?php the_field('text_2'); ?>
                    </div>
                </div>
                <div class="flex-auto flex items-center sm-max:none">
                    <?php getImage(get_field('img_2')); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-lg-y">
        <div class="container">
            <ul class="cards-col-3">
                <?php if (get_field('columns_2')) : ?>
                    <?php while (the_repeater_field('columns_2')) : ?>
                        <li class="card card--default">
                            <div>
                                <div class="card__icon">
                                    <?php getImage(get_sub_field('img')); ?>
                                </div>
                                <div class="card__line line-title xs-max:mt-30">
                                    <div class="max-w-280">
                                        <h4><?php the_sub_field('title'); ?></h4>
                                    </div>
                                </div>
                                <div class="text text--md lh-160 mt-20 sm-max:mt-15">
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

    <section class="indent-y">
        <div class="container">
            <div class="top-line xs-max:none"></div>
            <div class="two-items pt-70 xs-max:pt-50">
                <div class="xs-max:over-w">
                    <picture>
                        <source srcset="<?php echo get_field('img_3_mob')['url']; ?>" media="(max-width: 479px)">
                        <?php getImage(get_field('img_3')); ?>
                    </picture>
                </div>
                <div class="flex items-center">
                    <div>
                        <div class="line-title uppercase inline-flex">
                            <h2>
                                <?php the_field('heading_3'); ?>
                            </h2>
                        </div>
                        <div class="caption-primary-block text text--md lh-160 mt-20 sm-max:mt-20">
                            <?php the_field('text_3'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-t indent-md-b">
        <div class="container">
            <h2>
                Executive Team
            </h2>
            <div class="top-two-line mt-45 sm-max:mt-25"></div>
            <ul class="cards-col-4-secondary mt-120 sm-max:mt-50">
                <?php if (get_field('team')) : ?>
                    <?php while (the_repeater_field('team')) : ?>
                        <li class="card card--default">
                            <div>
                                <div class="card__pic">
                                    <div>
                                        <?php getImage(get_sub_field('photo')); ?>
                                    </div>
                                    <div class="card__links">
                                        <a href="<?php the_sub_field('link'); ?>" class="icon-link">
                                            <svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.422.875a.86.86 0 1 1-1.719 0 .86.86 0 0 1 1.719 0Zm-.11 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 1 0 1.5 0v-5.5Zm2-.75c.472 0 1.09.25 1.543.12a3.155 3.155 0 0 1 4.02 3.036v3.094a.75.75 0 1 1-1.5 0V6.031a1.656 1.656 0 0 0-3.313 0v3.094a.75.75 0 1 1-1.5 0v-5.5a.75.75 0 0 1 .75-.75Z" fill="#fff" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-25 sm-max:mt-15">
                                    <h4><?php the_sub_field('name'); ?></h4>
                                    <div class="text text--md lh-160"><?php the_sub_field('title'); ?></div>
                                </div>
                                <div class="text text--md lh-160 mt-15">
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

    <section class="indent-md-t mb-90 sm-max:mb-60">
        <div class="container">
            <h2>
                <?php the_field('heading_5'); ?>
            </h2>
            <div class="top-two-line mt-45 sm-max:mt-25"></div>
            <ul class="cards-col-4-secondary mt-120 sm-max:mt-50">
                <?php if (get_field('advisors')) : ?>
                    <?php while (the_repeater_field('advisors')) : ?>
                        <li class="card card--default">
                            <div class="flex flex-col w-full">
                                <div class="card__pic">
                                    <div>
                                        <?php getImage(get_sub_field('photo')); ?>
                                    </div>
                                    <div class="card__links">
                                        <a href="<?php the_sub_field('link'); ?>" class="icon-link">
                                            <svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.422.875a.86.86 0 1 1-1.719 0 .86.86 0 0 1 1.719 0Zm-.11 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 1 0 1.5 0v-5.5Zm2-.75c.472 0 1.09.25 1.543.12a3.155 3.155 0 0 1 4.02 3.036v3.094a.75.75 0 1 1-1.5 0V6.031a1.656 1.656 0 0 0-3.313 0v3.094a.75.75 0 1 1-1.5 0v-5.5a.75.75 0 0 1 .75-.75Z" fill="#fff" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-25 sm-max:mt-15">
                                    <h4><?php the_sub_field('name'); ?></h4>
                                </div>
                                <div class="text text--md lh-160 mt-10 sm-max:mt-5">
                                    <p>
                                        <?php the_sub_field('text'); ?>
                                    </p>
                                </div>
                                <div class="card__sign mt-auto pt-35 sm-max:pt-15">
                                    <svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.023 5.838v6.048M2.209 5.838h14.515L9.466 1 2.21 5.838ZM7.652 5.838v6.048M11.281 5.838v6.048M14.91 5.838v6.048M2.209 11.886h14.515M1 14.305h16.934" stroke="#A0A5AA" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="text text--md lh-160"><?php the_sub_field('title'); ?></span>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <li class="card card:active card--rounded card--no-border min-h-420">
                    <div class="card__inner flex flex-col items-center justify-center h-full">
                        <div class="text-center">
                            <h3>
                                <?php echo get_field('last_block')['heading']; ?>
                            </h3>
                            <div class="mt-25 xs-max:mt-20">
                                <?php getLink(get_field('last_block')['link'], 'btn btn--outline'); ?>
                            </div>
                            <div class="card__img flex justify-center mt-35 xs-max:mt-25">
                                <?php getImage(get_field('last_block')['img']); ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <a class="btn btn--outline" href="/partners/#contact_form" target="_self">See Open Roles</a>

    <section class="indent-lg-y">
        <div class="container">
            <div class="top-two-line"></div>
            <div class="two-items two-items--sm-gap-30 two-items--sm-reverse quote-block pt-100 sm-max:pt-60">
                <div>
                    <div class="quote-block__holder">
                        <svg class="quote-block__mark">
                            <use xlink:href="#icon-quote"></use>
                        </svg>
                        <div>
                            <h3>
                                <?php the_field('heading_6'); ?>
                            </h3>
                            <div class="caption-secondary-block text text--md lh-160 mt-30 sm-max:mt-15">
                                <?php the_field('text_6'); ?>
                            </div>
                        </div>
                        <svg class="quote-block__mark">
                            <use xlink:href="#icon-quote"></use>
                        </svg>
                    </div>
                    <div class="mt-25 md:none">
                        <div class="quote-block__sign">
                            <strong><?php the_field('quote_author'); ?> </strong>
                            <?php the_field('author_title'); ?>
                        </div>
                    </div>
                </div>
                <div class="quote-block__item">
                    <div class="flex-image flex-image--square-2 w-full max-w-490">
                        <div class="flex-image__pic pic-rounded">
                            <?php getImage(get_field('img_6')); ?>
                        </div>
                    </div>
                    <div class="quote-block__sign mt-30 sm-max:none">
                        <strong><?php the_field('quote_author'); ?> </strong>
                        <?php the_field('author_title'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/subscribe-form'); ?>

</main>

<?php include('footer.php'); ?>