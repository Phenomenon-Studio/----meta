<?php
/*
Template name: VR Marketplace
*/
?>

<?php include('header.php'); ?>

<man>
    <section class="primary">
        <picture class="primary__pic">
            <source srcset="<?php echo get_field('background_1_mob')['url']; ?>" media="(max-width: 479px)">
            <?php getImage(get_field('background_1')); ?>
        </picture>
        <div class="primary__holder">
            <div class="container h-full">
                <div class="flex items-center justify-center h-full">
                    <div class="w-full max-w-600 text-center">
                        <h1 class="color-white lh-140">
                            <?php the_field('heading_1'); ?>
                        </h1>
                        <div class="mt-30 xs-max:mt-25">
                            <a class="btn btn--primary" href="<?php echo get_field('link_1')['url']; ?>" data-popup-open data-popup="popup-waitlist"><?php echo get_field('link_1')['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="indent-md-y">
        <div class="container">
            <div class="flex items-center justify-between xs-max:flex-col xs-max:items-start">
                <div class="uppercase">
                    <h2>
                        <?php the_field('heading_2'); ?>
                    </h2>
                </div>
                <div class="flex items-center ml-10 xs-max:mt-20 xs-max:ml-0">
                    <a href="<?php echo get_field('link_1')['url']; ?>" class="link">
                        <?php echo get_field('link_1')['title']; ?>
                        <svg>
                            <use xlink:href="#icon-arrow-x"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="cards-col-3 mt-50 sm-max:mt-40">
            	<?php foreach (get_field('posts') as $post){ ?>
            	<div>
                    <div class="pic-rounded image-fill h-230">
                        <span class="chip">
                        	<?php  
                        	$category_detail=get_the_category($post);//$post->ID
							foreach($category_detail as $cd){?>
								<span class="fz-12 color-white lh-160"><?php echo $cd->cat_name; ?></span>
							<?php } ?>
                        </span>
                        <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="" loading="lazy">
                    </div>
                    <div class="mt-20">
                        <h4><?php echo get_the_title($post); ?></h4>
                    </div>
                </div>
            	<?php } ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/subscribe-form'); ?>
</man>

<div id="popup-waitlist-success" class="popup" style="display: none;">
    <div class="popup__overlay" data-popup-close></div>
    <div class="popup__wrap">
        <button type="button" class="popup__close" data-popup-close>
            <svg>
                <use xlink:href="#icon-cross" />
            </svg>
        </button>
        <div class="flex flex-col items-center">
            <div class="popup__icon">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-18.png" alt="" loading="lazy">
            </div>
            <div class="text-center">
                <h3>Thanks for joining us!</h3>
            </div>
        </div>
    </div>
</div>

<div id="popup-waitlist" class="popup popup--waitlist" style="display: none;">
    <div class="popup__overlay" data-popup-close></div>
    <div class="popup__wrap">
        <button type="button" class="popup__close" data-popup-close>
            <svg>
                <use xlink:href="#icon-cross" />
            </svg>
        </button>
        <div class="w-full max-w-600">
            <h3>Join the waitlist</h3>
            <form autocomplete="off" action="/?form-action=join" method="POST" class="form mt-60 sm-max:mt-40" data-watch-form data-ajax data-validation novalidate data-wait-success="waitlist-success">
                <input type="hidden" name="form-action" value="join" hidden tabindex="-1">
                <div class="form__row">
                    <div>
                        <div class="form__control" data-form-control>
                            <label>
                                <input type="text" name="name" data-watch-input required autocomplete="off">
                                <span class="form__placeholder" data-placeholder>Name</span>
                                <div class="form__line"></div>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="form__control" data-form-control>
                            <label>
                                <input type="email" name="email" data-watch-input required autocomplete="off">
                                <span class="form__placeholder" data-placeholder>Email</span>
                                <div class="form__line"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-40">
                    <button type="submit" class="btn btn--primary xs:w-full min-w-160">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>