<?php
/*
Template name: Home
*/
?>

<?php include('header.php'); ?>

<main>

    <section class="primary">
        <picture class="primary__pic">
            <source srcset="<?php echo get_field('background_2_1')['url']; ?>" media="(max-width: 479px)">
            <?php getImage(get_field('background_1')); ?>
        </picture>
        <div class="primary__holder">
            <div class="container container--xl h-full">
                <div class="flex items-end h-full relative max-w-675">
                    <div class="primary__content">
                        <h1 class="color-white"><?php the_field('heading_1'); ?></h1>
                        <div class="btns-holder mt-40 xs-max:mt-25">
                            <?php getLink(get_field('link_1_1'), 'btn btn--primary'); ?>
                            <?php getLink(get_field('link_2_1'), 'btn btn--secondary-outline'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-t mb-80 sm-max:mb-40">
        <div class="container">
            <div class="max-w-740 text-center sm-max:text-left mx-auto">
                <h3>
                    <?php the_field('heading_2'); ?>
                </h3>
            </div>
        </div>
    </section>

    <section class="mt-80 sm-max:mt-40 indent-b">
        <div class="container">
            <div class="top-rounded sm-max:none mb-65 md-max:mb-40">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-line-round"></use>
                </svg>
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-line-round"></use>
                </svg>
            </div>
            <div class="two-items">
                <div class="frame flex items-center justify-center sm-max:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 546 543" fill="none">
                        <g class="frame__filter-1" filter="url(#filter_0)">
                            <path class="frame__filter-path" d="M255.189 264.707C260.93 262.943 267.07 262.943 272.811 264.707L471.442 325.739C484.035 329.609 492.631 341.242 492.631 354.416V450.584C492.631 463.758 484.035 475.391 471.442 479.261L272.811 540.293C267.07 542.057 260.93 542.057 255.189 540.293L56.5579 479.261C43.9645 475.391 35.3693 463.758 35.3693 450.584V354.416C35.3693 341.242 43.9645 329.609 56.5579 325.739L255.189 264.707Z" />
                        </g>
                        <mask id="mask_0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="45" y="272" width="436" height="261">
                            <path class="frame__mask-path" d="M257.25 273.726C261.001 272.6 264.999 272.6 268.75 273.726L466.122 332.973C474.581 335.511 480.372 343.297 480.372 352.128V452.872C480.372 461.703 474.581 469.489 466.122 472.027L268.75 531.274C264.999 532.4 261.001 532.4 257.25 531.274L59.8776 472.027C51.4194 469.489 45.6276 461.703 45.6276 452.872V352.128C45.6276 343.297 51.4194 335.511 59.8776 332.973L257.25 273.726Z" />
                        </mask>
                        <g mask="url(#mask_0)">
                            <rect x="20.7354" y="272.002" preserveAspectRatio="xMidYMid slice" width="464.261" height="261.008" rx="20" transform="rotate(-0.027596 20.7354 272.002)" fill="url(#pattern0)" />
                        </g>
                        <g opacity="0.3">
                            <g filter="url(#filter_1)">
                                <path class="frame__filter-path" d="M387 45.7735C393.188 42.2008 400.812 42.2008 407 45.7735L486.593 91.7265C492.781 95.2992 496.593 101.902 496.593 109.047V200.953C496.593 208.098 492.781 214.701 486.593 218.273L407 264.227C400.812 267.799 393.188 267.799 387 264.227L307.407 218.273C301.219 214.701 297.407 208.098 297.407 200.953V109.047C297.407 101.902 301.219 95.2992 307.407 91.7265L387 45.7735Z" />
                            </g>
                            <path d="M387.05 45.8601C393.207 42.3053 400.793 42.3053 406.95 45.8601L486.543 91.8131C492.7 95.3679 496.493 101.937 496.493 109.047V200.953C496.493 208.063 492.7 214.632 486.543 218.187L406.95 264.14C400.793 267.695 393.207 267.695 387.05 264.14L307.457 218.187C301.3 214.632 297.507 208.063 297.507 200.953V109.047C297.507 101.937 301.3 95.3679 307.457 91.8131L387.05 45.8601Z" stroke="#fff" stroke-width="0.2" />
                        </g>
                        <path class="frame__arrow" d="M108 1V0.5H107.5V1H108ZM397 1H397.5V0.5H397V1ZM397 18L399.887 13H394.113L397 18ZM108.5 28V24.9318H107.5V28H108.5ZM108.5 4.06818V1H107.5V4.06818H108.5ZM108 1.5H110.526V0.5H108V1.5ZM127.705 1.5H132.757V0.5H127.705V1.5ZM149.935 1.5H154.988V0.5H149.935V1.5ZM172.166 1.5H177.219V0.5H172.166V1.5ZM194.397 1.5H199.449V0.5H194.397V1.5ZM216.628 1.5H221.68V0.5H216.628V1.5ZM238.858 1.5H243.911V0.5H238.858V1.5ZM261.089 1.5H266.142V0.5H261.089V1.5ZM283.32 1.5H288.372V0.5H283.32V1.5ZM305.551 1.5H310.603V0.5H305.551V1.5ZM327.781 1.5H332.834V0.5H327.781V1.5ZM350.012 1.5H355.065V0.5H350.012V1.5ZM372.243 1.5H377.295V0.5H372.243V1.5ZM394.474 1.5H397V0.5H394.474V1.5ZM396.5 1V2.93182H397.5V1H396.5Z" />
                        <path class="frame__arrow" d="M545 161L545.5 161L545.5 160.5L545 160.5L545 161ZM545 404L545 404.5L545.5 404.5L545.5 404L545 404ZM511 404L516 406.887L516 401.113L511 404ZM511 161.5L512.932 161.5L512.932 160.5L511 160.5L511 161.5ZM526.068 161.5L529.932 161.5L529.932 160.5L526.068 160.5L526.068 161.5ZM543.068 161.5L545 161.5L545 160.5L543.068 160.5L543.068 161.5ZM544.5 161L544.5 163.51L545.5 163.51L545.5 161L544.5 161ZM544.5 180.581L544.5 185.601L545.5 185.601L545.5 180.581L544.5 180.581ZM544.5 202.671L544.5 207.692L545.5 207.692L545.5 202.671L544.5 202.671ZM544.5 224.762L544.5 229.783L545.5 229.783L545.5 224.762L544.5 224.762ZM544.5 246.853L544.5 251.874L545.5 251.874L545.5 246.853L544.5 246.853ZM544.5 268.944L544.5 273.965L545.5 273.965L545.5 268.944L544.5 268.944ZM544.5 291.035L544.5 296.056L545.5 296.056L545.5 291.035L544.5 291.035ZM544.5 313.126L544.5 318.147L545.5 318.147L545.5 313.126L544.5 313.126ZM544.5 335.217L544.5 340.238L545.5 340.238L545.5 335.217L544.5 335.217ZM544.5 357.308L544.5 362.329L545.5 362.329L545.5 357.308L544.5 357.308ZM544.5 379.399L544.5 384.419L545.5 384.419L545.5 379.399L544.5 379.399ZM544.5 401.49L544.5 404L545.5 404L545.5 401.49L544.5 401.49ZM545 403.5L543.068 403.5L543.068 404.5L545 404.5L545 403.5ZM529.932 403.5L526.068 403.5L526.068 404.5L529.932 404.5L529.932 403.5Z" />
                        <mask id="mask_1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="307" y="54" width="180" height="202">
                            <path class="frame__mask-path" d="M387 57.0992C393.188 53.5265 400.812 53.5265 407 57.0992L476.785 97.3893C482.973 100.962 486.785 107.564 486.785 114.71V195.29C486.785 202.435 482.973 209.038 476.785 212.611L407 252.901C400.812 256.473 393.188 256.473 387 252.901L317.216 212.611C311.028 209.038 307.216 202.435 307.216 195.29V114.71C307.216 107.564 311.028 100.962 317.216 97.3893L387 57.0992Z" />
                        </mask>
                        <g mask="url(#mask_1)">
                            <g filter="url(#filter_2)">
                                <rect x="293.326" y="44.637" width="209.578" height="257.513" rx="20" fill="url(#pattern_1)" shape-rendering="crispEdges" />
                            </g>
                        </g>
                        <g opacity="0.3" filter="url(#filter_3)">
                            <path class="frame__filter-path" d="M23 127C23 79.5035 61.5035 41 109 41C156.496 41 195 79.5035 195 127V247C195 252.523 190.523 257 185 257H33C27.4772 257 23 252.523 23 247V127Z" />
                        </g>
                        <g filter="url(#filter_4)">
                            <path d="M32 129C32 85.9218 66.9218 51 110 51C153.078 51 188 85.9218 188 129V248H32V129Z" fill="url(#pattern_2)" />
                        </g>
                        <defs>
                            <filter id="filter_0" x="35.3691" y="263.384" width="457.262" height="278.231" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="shape" result="effect_inner_1" />
                            </filter>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#frame_img_3" transform="translate(0 -0.000265976) scale(0.000520833 0.000926418)" />
                            </pattern>
                            <filter id="filter_1" x="297.407" y="43.094" width="199.186" height="223.812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="shape" result="effect_inner_1" />
                            </filter>
                            <filter id="filter_2" x="283.326" y="34.637" width="229.578" height="277.513" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="5" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2809_24373" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2809_24373" result="shape" />
                            </filter>
                            <pattern id="pattern_1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#frame_img_2" transform="translate(-0.0815135 -0.00401606) scale(0.0030514 0.00247067)" />
                            </pattern>
                            <filter id="filter_3" x="23" y="41" width="172" height="216" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="7" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="shape" result="effect_inner_1" />
                            </filter>
                            <filter id="filter_4" x="32" y="51" width="156" height="197" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="5" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.1 0" />
                                <feBlend mode="normal" in2="shape" result="effect_inner_1" />
                            </filter>
                            <pattern id="pattern_2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#frame_img_1" transform="translate(-0.215758 -0.000448026) scale(0.00120119 0.000954032)" />
                            </pattern>
                            <image id="frame_img_1" width="210%" height="200%" xlink:href="<?php echo get_field('img_1_3')['url']; ?>" />
                            <image id="frame_img_2" width="70%" height="60%" xlink:href="<?php echo get_field('img_2_3')['url']; ?>" />
                            <image id="frame_img_3" width="370%" height="200%" xlink:href="<?php echo get_field('img_3_3')['url']; ?>" />
                        </defs>
                    </svg>
                </div>
                <div class="flex items-center justify-center sm-max:justify-start">
                    <div class="w-full max-w-500">
                        <div class="line-title uppercase">
                            <h2>
                                <?php the_field('heading_3'); ?>
                            </h2>
                        </div>
                        <div class="caption-block text text-md lh-160 mt-20">
                            <?php the_field('text_3'); ?>
                        </div>
                        <div class="mt-30 sm-max:mt-40">
                            <?php getLink(get_field('link_3'), 'btn btn--primary xs:w-full'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-t indent-lg-b">
        <div class="container">
            <ul class="cards">
                <?php if (get_field('columns_4')) : ?>
                    <?php while (the_repeater_field('columns_4')) : ?>
                        <li class="card card--sm card:hover">
                            <div class="card__holder flex sm-max:flex-col">
                                <div class="card__icon">
                                    <?php getImage(get_sub_field('icon')); ?>
                                </div>
                                <div class="max-w-490">
                                    <div class="card__line line-title">
                                        <h4><?php the_sub_field('heading'); ?></h4>
                                    </div>
                                    <div class="text text-md lh-160 mt-15 sm-max:mt-15">
                                        <p>
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <section class="mt-90 mb-90 sm-max:mt-75 sm-max:mb-20">
        <div class="container">
            <div class="max-w-675 text-center sm-max:text-left mx-auto">
                <h3>
                    <?php the_field('heading_5'); ?>
                </h3>
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
            <div class="two-items two-items--sm-reverse mt-60 sm-max:mt-0 two-items--sm-gap-30">
                <div class="flex items-center">
                    <div class="w-full max-w-500">
                        <div class="line-title uppercase max-w-385">
                            <h2>
                                <?php echo get_field('block_1')['heading']; ?>
                            </h2>
                        </div>
                        <div class="text text-md lh-160 mt-20 sm-max:mt-25">
                            <p>
                                <?php echo get_field('block_1')['text']; ?>
                            </p>
                        </div>
                        <div class="mt-30 sm-max:mt-40">
                            <?php getLink(get_field('block_1')['link'], 'btn btn--primary xs:w-full'); ?>
                        </div>
                    </div>
                </div>
                <div class="two-items-secondary sm-max:mt-25">
                    <div>
                        <div class="w-full max-w-270 xs-max:max-w-none">
                            <picture class="pic-rounded sm-max:pic-rounded--60">
                                <source srcset="<?php echo (get_field('block_1')['img_1_mob'])['url']; ?>" media="(max-width: 479px)">
                                <?php getImage(get_field('block_1')['img_1']); ?>
                            </picture>
                        </div>
                    </div>
                    <div class="flex items-center justify-end sm-max:justify-start xs-max:none">
                        <div class="w-full max-w-290">
                            <picture class="pic-rounded pic-rounded--70">
                                <source srcset="<?php echo (get_field('block_1')['img_2_mob'])['url']; ?>" media="(max-width: 479px)">
                                <?php getImage(get_field('block_1')['img_2']); ?>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="two-items mt-100 sm-max:mt-80 two-items--sm-gap-30">
                <div class="flex items-center">
                    <picture class="w-full max-w-490 pic-rounded">
                        <source srcset="<?php echo (get_field('block_2')['img_1_mob'])['url']; ?>" media="(max-width: 479px)">
                        <?php getImage(get_field('block_2')['img_1']); ?>
                    </picture>
                </div>
                <div class="flex items-center">
                    <div class="w-full">
                        <div class="line-title uppercase max-w-385">
                            <h2>
                                <?php echo get_field('block_2')['heading']; ?>
                            </h2>
                        </div>
                        <div class="text text-md lh-160 mt-20 sm-max:mt-25">
                            <p>
                                <?php echo get_field('block_2')['text']; ?>
                            </p>
                        </div>
                        <div class="mt-30 sm-max:mt-40">
                            <?php getLink(get_field('block_2')['link'], 'btn btn--primary xs:w-full'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- new -->
    <section class="mt-90 mb-90 sm-max:mt-75 sm-max:mb-20 pt-20 sm-max:pt-0">
        <div class="container">
            <div class="max-w-650 text-center sm-max:text-left mx-auto">
                <h3>
                    An interactive VR marketplace to visualize, 
                    test, and trade a near infinite variety of 3D NFTs 
                </h3>
            </div>
        </div>
    </section>

    <section class="indent-md-t indent-b">
        <div class="container">
            <div class="top-rounded top-rounded--monolith">
                <svg class="top-rounded__icon">
                    <use xlink:href="#icon-arc-solid"></use>
                </svg>
                <svg class="top-rounded__icon-mob">
                    <use xlink:href="#icon-top-arc"></use>
                </svg>
            </div>
            <div class="w-full max-w-600 mt-75 sm-max:mt-35">
                <div class="mb-20">
                    <span class="mark"><?php the_field('subheading_6'); ?></span>
                </div>
                <h2 class="uppercase">
                    <?php the_field('heading_6'); ?>
                </h2>
                <div class="text text-md lh-160 mt-20">
                    <p>
                        <?php the_field('text_6'); ?>
                    </p>
                </div>
                <div class="mt-30">
                    <?php getLink(get_field('link_6'), 'btn btn--primary xs:w-full'); ?>
                </div>
            </div>
            <div class="mt-80 sm-max:mt-40">
                <div class="flex-image">
                    <picture class="flex-image__pic">
                        <source srcset="<?php echo get_field('full_width_image_7_mob')['url']; ?>" media="(max-width: 479px)">
                        <?php getImage(get_field('full_width_image_6')); ?>
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="partners indent-lg-y">
        <div class="container">
            <h2 class="uppercase"><?php the_field('heading_7'); ?></h2>
            <div class="text text-md lh-160 w-full max-w-600 mt-20 sm-max:ml-0">
                <p>
                    <?php the_field('text_7'); ?>
                </p>
            </div>
            <div class="mt-30">
                <?php getLink(get_field('link_7'), 'btn btn--primary xs:w-full'); ?>
            </div>
            <div class="partners__logos mt-70 sm-max:mt-45">
                <div class="slider-wrap">
                    <div data-slider-mq="479">
                        <div class="swiper-wrapper">
                            <?php if(get_field('parthners')): ?>
                            <?php while(the_repeater_field('parthners')): ?> 
                                <div class="swiper-slide">
                                    <div class="dark h-full">
                                        <?php getImage(get_sub_field('logo')); ?>
                                    </div>
                                    <div class="light h-full">
                                        <?php getImage(get_sub_field('logo_light')); ?>
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
        <div class="container">
            <ul class="cards">
                <?php if (get_field('columns_6')) : ?>
                    <?php while (the_repeater_field('columns_6')) : ?>
                        <li class="card card:hover">
                            <div class="card__holder">
                                <div class="w-full max-w-490 flex flex-col">
                                    <div class="card__line line-title">
                                        <h4 class="uppercase"> <?php the_sub_field('heading'); ?> </h4>
                                    </div>
                                    <div class="text text-md lh-160 mt-20 sm-max:mt-15">
                                        <p>
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <div class="mt-auto pt-25">
                                        <a href="<?php echo get_sub_field('link')['url']; ?> " class="card__link link">
                                            <?php echo get_sub_field('link')['title']; ?>
                                            <svg>
                                                <use xlink:href="#icon-arrow-x"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <section class="faq indent-y">
        <div class="container">
            <div class="flex items-center justify-between">
                <h2 class="uppercase"><?php the_field('heading_8'); ?></h2>
                <a href="<?php echo get_field('link_8')['url']; ?>" class="link">
                    <?php echo get_field('link_8')['title']; ?>
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
</main>

<?php include('footer.php'); ?>