<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php get_res(); ?>
    <?php wp_head(); ?>
</head>

<body class="<?php echo $_COOKIE['theme'] == 'light' ?  'theme-light' : 'theme-dark' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position: absolute; display: none">
        <symbol id="icon-sun" fill="none" viewBox="0 0 22 23">
            <path d="M11 16.888a5.156 5.156 0 1 0 0-10.312 5.156 5.156 0 0 0 0 10.312ZM11 3.825V2.107M5.41 6.141 4.194 4.926M3.094 11.732H1.375M5.41 17.322l-1.216 1.216M11 19.638v1.719M16.59 17.322l1.216 1.216M18.906 11.732h1.719M16.59 6.141l1.216-1.215" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>

        <symbol id="icon-moon" fill="none" viewBox="0 0 18 19">
            <path d="M.96 11.585a8.257 8.257 0 0 0 9.894-9.894h0a8.251 8.251 0 1 1-9.895 9.894h0Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>

        <symbol id="icon-arrow-x" viewBox="0 0 28 18">
            <path d="M3 9h22M22 5l3.646 3.646a.5.5 0 0 1 0 .708L22 13" stroke-width="1.5" stroke-linecap="round" />
        </symbol>

        <symbol id="icon-line-round" fill="none" viewBox="0 0 591 25">
            <path d="M590.5.499H55C39.5.5 30 2.89 23 6 16 9.11 6.5 14.5 1 24" />
        </symbol>

        <symbol id="icon-top-arc" viewBox="0 0 328 25">
            <g>
                <path d="M153.434.5c0 .5.498.5.498.5h-99.5C38.988 1 29.56 3.382 22.637 6.458 15.664 9.555 6.285 14.89.866 24.252L0 23.75C5.58 14.11 15.202 8.667 22.23 5.544 29.306 2.4 38.878 0 54.433 0h99.499s-.498 0-.498.5Z" />
                <path d="M153.434.5c0-.5.5-.5.5-.5h119.499c15.555 0 25.126 2.4 32.203 5.544 7.028 3.123 16.649 8.567 22.229 18.206l-.865.502c-5.419-9.36-14.798-14.697-21.77-17.794C298.306 3.382 288.878 1 273.433 1H153.934s-.5 0-.5-.5Z" />
            </g>
        </symbol>

        <symbol id="icon-num-box" viewBox="0 0 40 40">
            <g filter="url(#num-box)">
                <path d="M16.5 2.02a7 7 0 0 1 7 0l10.32 5.96a7 7 0 0 1 3.5 6.061V25.96a7 7 0 0 1-3.5 6.062L23.5 37.979a7 7 0 0 1-7 0L6.18 32.021a7 7 0 0 1-3.5-6.063V14.043a7 7 0 0 1 3.5-6.063L16.5 2.021Z" />
            </g>
            <path d="M16.75 2.454a6.5 6.5 0 0 1 6.5 0l10.32 5.958a6.5 6.5 0 0 1 3.25 5.63v11.917a6.5 6.5 0 0 1-3.25 5.629l-10.32 5.958a6.5 6.5 0 0 1-6.5 0L6.43 31.588a6.5 6.5 0 0 1-3.25-5.63V14.043a6.5 6.5 0 0 1 3.25-5.63l10.32-5.958Z" />
            <defs>
                <filter id="num-box" x="2.68" y="1.083" width="34.641" height="37.834" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="5" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0" />
                    <feBlend in2="shape" result="effect_box_innerShadow" />
                </filter>
            </defs>
        </symbol>

        <symbol id="icon-quote" viewBox="0 0 40 35">
            <path d="M35.067 15.185a5 5 0 0 0 0 4.63l4.111 7.87c1.74 3.329-.675 7.315-4.431 7.315h-1.949a5 5 0 0 1-4.452-2.725l-6.387-12.5a5 5 0 0 1 0-4.55l6.387-12.5A5 5 0 0 1 32.798 0h1.949c3.755 0 6.17 3.986 4.431 7.315l-4.111 7.87Zm-20.873-.02a5 5 0 0 0 0 4.67l4.135 7.83c1.759 3.33-.655 7.335-4.421 7.335h-1.906a5 5 0 0 1-4.453-2.725l-6.387-12.5a5 5 0 0 1 0-4.55l6.387-12.5A5 5 0 0 1 12.002 0h1.906c3.766 0 6.18 4.005 4.421 7.335l-4.135 7.83Z" />
        </symbol>

        <symbol id="icon-image" viewBox="0 0 22 22">
            <path d="M14.438 8.594a1.031 1.031 0 1 1-2.063 0 1.031 1.031 0 0 1 2.063 0Zm5.5-3.781v12.375a1.376 1.376 0 0 1-1.375 1.375H3.438a1.376 1.376 0 0 1-1.376-1.375V4.813a1.377 1.377 0 0 1 1.376-1.375h15.124a1.377 1.377 0 0 1 1.375 1.375Zm-1.375 9.34v-9.34H3.438v7.965L6.59 9.625a1.377 1.377 0 0 1 1.945 0l3.84 3.84 1.778-1.777a1.377 1.377 0 0 1 1.944 0l2.466 2.465Z" />
        </symbol>

        <symbol id="icon-bottom-arc" fill="none" viewBox="0 0 389 8">
            <path d="M1 .5s2.5 7 13.5 7h360c10 0 13.5-7 13.5-7" />
        </symbol>

        <symbol id="icon-arc-solid" fill="none" viewBox="0 0 1206 25">
            <path d="M616 1h535.5c15.5 0 25 2.39 32 5.501 7 3.11 16.5 8.5 22 18M616 1H55C39.5 1 30 3.39 23 6.501c-7 3.11-16.5 8.5-22 18" />
        </symbol>

        <symbol id="icon-cross" fill="none" viewBox="0 0 18 18">
            <path d="M1 17 17 1M17 17 1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>

        <symbol id="icon-arrow" fill="none" viewBox="0 0 8 14">
            <path d="M1 1.5 7 7l-6 5.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
    </svg>
    <div class="wrap">
        <div class="wrap__inner">
            <header class="header <?php echo $_GET['header_classes']; ?>">
                <div class="container container--xl">
                    <nav class="navbar" data-nav>
                        <a href="/" class="navbar__logo logo mr-auto">
                            <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="">
                        </a>
                        <div class="navbar__nav" data-menu>
                            <?php wp_nav_menu(array('menu' => 'Main menu', 'theme_location' => 'main_menu', 'container' => 'ul')); ?>
                            <div class="navbar__mob-bottom nav-bottom">
                                <div>
                                    <div class="flex items-center justify-between pr-10">
                                        <a href="#" class="nav-bottom__item mr-20">Terms Of Service</a>
                                        <a href="#" class="nav-bottom__item">Privacy Policy</a>
                                    </div>
                                    <div class="mt-15">
                                        <span class="nav-bottom__item">&copy; Copyright <?php echo date('Y'); ?>, All Rights Reserved</span>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-switcher-wrap">
                                <div class="theme-switcher" data-theme-switcher>
                                    <label class="theme-switcher__item radio">
                                        <input hidden type="radio" name="theme" tabindex="-1" value="dark" <?php if ($_COOKIE['theme'] != 'light') { ?>checked="checked" <?php } ?>>
                                        <svg class="icon-moon">
                                            <use xlink:href="#icon-moon"></use>
                                        </svg>
                                    </label>
                                    <label class="theme-switcher__item radio">
                                        <input hidden type="radio" name="theme" tabindex="-1" value="light" <?php if ($_COOKIE['theme'] == 'light') { ?>checked="checked" <?php } ?>>
                                        <svg>
                                            <use xlink:href="#icon-sun"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="navbar__toggler hamburger" data-menu-toggler>
                            <span></span>
                        </button>
                    </nav>
                </div>
            </header>