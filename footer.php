        </div>
        <footer class="footer">
           <div class="container container--xl">
             <div class="footer__holder nav-bottom">
                 <div class="footer__logo">
                     <a href="/" class="logo">
                        <div class="dark">
                            <?php getImage(get_field('footer_logo', 'options')); ?>
                        </div>
                        <div class="light">
                            <?php getImage(get_field('footer_logo_light', 'options')); ?>
                        </div>
                     </a>
                     <div class="mt-10 sm-max:mt-20 xs-max:mb-5 text-md lh-160">
                         <p>
                             <?php the_field('text_footer', 'options'); ?>
                         </p>
                     </div>
                 </div>
                 <div class="footer__item">
                     <h4 class="footer__headline">
                         Products
                     </h4>
                     <div class="footer__nav">
                         <?php wp_nav_menu([
                             'menu' => 'Footer menu 1',
                             'theme_location' => 'footer_menu_1',
                             'container' => 'ul',
                         ]); ?>
                     </div>
                 </div>
                 <div class="footer__item">
                     <h4 class="footer__headline">
                         Resources
                     </h4>
                     <div class="footer__nav">
                         <?php wp_nav_menu([
                             'menu' => 'Footer menu 2',
                             'theme_location' => 'footer_menu_2',
                             'container' => 'ul',
                         ]); ?>
                     </div>
                 </div>
                 <div class="footer__item">
                     <h4 class="footer__headline">
                         Heading
                     </h4>
                     <div class="footer__nav">
                         <?php wp_nav_menu([
                             'menu' => 'Footer menu 3',
                             'theme_location' => 'footer_menu_3',
                             'container' => 'ul',
                         ]); ?>
                     </div>
                 </div>
                 <div class="footer__item footer__soc">
                     <div class="max-w-185 sm-max:max-w-200 xs-max:max-w-none w-full">
                         <h4 class="footer__headline">
                             <?php the_field('heading_social', 'options'); ?>
                         </h4>
                         <ul class="footer__soc-list">
                             <?php if (get_field('icons_social', 'options')) : ?>
                                 <?php while (the_repeater_field('icons_social', 'options')) : ?>
                                     <li>
                                         <a href="<?php the_sub_field('link'); ?> ">
                                             <?php the_sub_field('icon'); ?>
                                         </a>
                                     </li>
                                 <?php endwhile; ?>
                             <?php endif; ?>
                         </ul>
                     </div>
                 </div>
                 <div class="footer__divide"></div>
                 <div class="footer__bottom">
                     <div class="footer__bottom-holder">
                         <div class="footer__copy pr-10 xs-max:pr-0">
                             <span class="nav-bottom__item">&copy; Copyright <?php echo date('Y'); ?>, All Rights Reserved</span>
                         </div>
                         <div class="footer__bottom-links">
                             <div>
                                 <a href="<?php echo get_permalink(pll_get_post(509)); ?>" class="nav-bottom__item"><?php echo get_the_title(pll_get_post(509)); ?></a>
                             </div>
                             <div>
                                 <a href="<?php echo get_permalink(pll_get_post(3)); ?>" class="nav-bottom__item"><?php echo get_the_title(pll_get_post(3)); ?></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
           </div>
        </footer>
        </div>

        <?php wp_footer(); ?>
    </body>

</html>