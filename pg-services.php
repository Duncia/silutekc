<?php 
/* Template Name: Services page */

/*
Services page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner">
        <?php
            $eventPageBannerImg = get_field('banner_image');
            if(!empty($eventPageBannerImg)): ?>
            <div class="page-banner pt-sm pb-md">
                <img class="" width="1640" height="100" src="<?php echo esc_url($eventPageBannerImg['url']); ?>" alt="<?php echo esc_attr($eventPageBannerImg['alt']); ?>"/>
                <?php if(get_field('banner_title')): ?>
                    <div class="page-banner__title">
                        <h2><?php the_field('banner_title'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>      
    </div>
</section>

<section class="container">
    <div class="container__inner pb-lr">
        <div class="services-title pb-md">
            <div class="services-title__line"></div>
                <?php if(get_field('premises_rent')): ?>
                    <h3 class="services-title__headline"><?php the_field('premises_rent'); ?></h3>
                <?php endif; ?>
        </div>
        <div class="premises-rent pb-md">
            <div class="premises-rent__img">
                <?php
                $bigHallImg = get_field('big_hall_image');
                if(!empty($bigHallImg)): ?>
                    <img src="<?php echo esc_url($bigHallImg['url']); ?>" alt="<?php echo esc_attr($bigHallImg['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="premises-rent__content">
                <?php if(get_field('big_hall_title')): ?>
                    <h4 class="pb-sm"><?php the_field('big_hall_title'); ?></h4>
                <?php endif; ?>
                <?php if(get_field('big_hall_text')): ?>
                    <?php the_field('big_hall_text'); ?>
                <?php endif; ?>
                <?php if(get_field('services_form_url')): ?>
                <p class="pb-sm"></p>
                <a href="<?php the_field('services_form_url'); ?>" class="premises-rent__btn">
                    <p class="btn btn--white">
                        <span><?php _e('Ask for details', 'siluteskc'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#284366" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </p>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="premises-rent">
            <div class="premises-rent__content grid-order-1">
                <?php if(get_field('chor_hall_title')): ?>
                    <h4 class="pb-sm"><?php the_field('chor_hall_title'); ?></h4>
                <?php endif; ?>
                <?php if(get_field('chor_hall_text')): ?>
                    <?php the_field('chor_hall_text'); ?>
                <?php endif; ?>
                <?php if(get_field('services_form_url')): ?>
                <p class="pb-sm"></p>
                <a href="<?php the_field('services_form_url'); ?>" class="premises-rent__btn">
                    <p class="btn btn--white">
                        <span><?php _e('Ask for details', 'siluteskc'); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#284366" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </p>
                </a>
                <?php endif; ?>
            </div>
            <div class="premises-rent__img">
                <?php
                $chorHallImg = get_field('chor_hall_image');
                if(!empty($chorHallImg)): ?>
                    <img src="<?php echo esc_url($chorHallImg['url']); ?>" alt="<?php echo esc_attr($chorHallImg['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="container container--schema">
    <div class="container__inner">
        <div class="schema-block">
            <div class="pb-sm">
                <div class="services-title pb-sm">
                    <div class="services-title__line"></div>
                    <?php if(get_field('hall_plan_title')): ?>
                    <h3 class="services-title__headline"><?php the_field('hall_plan_title'); ?></h3>
                    <?php endif; ?>
                </div>
                <?php
                $hallPlan = get_field('hall_plan');
                if(!empty($hallPlan)): ?>
                    <p class="pb-sm" style="text-decoration:underline; color:#284366;"><a href="<?php echo esc_url($hallPlan['url']); ?>" target="_blank"><?php _e('See file in other tab', 'siluteskc'); ?></a></p>
                <?php endif; ?>
            </div>
            <div class="schema-block__image">
                <?php
                $mainHallImg = get_field('hall_plan_image');
                if(!empty($mainHallImg)): ?>
                    <img src="<?php echo esc_url($mainHallImg['url']); ?>" alt="<?php echo esc_attr($mainHallImg['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="schema-block">
            <div class="pb-sm">
                <div class="services-title pb-sm">
                    <div class="services-title__line"></div>
                    <?php if(get_field('technical_plan_title')): ?>
                    <h3 class="services-title__headline"><?php the_field('technical_plan_title'); ?></h3>
                    <?php endif; ?>
                </div>
                <?php
                $techPlan = get_field('technical_plan');
                if(!empty($techPlan)): ?>
                    <p class="pb-sm" style="text-decoration:underline; color:#284366;"><a href="<?php echo esc_url($techPlan['url']); ?>" target="_blank"><?php _e('See file in other tab', 'siluteskc'); ?></a></p>
                <?php endif; ?>
            </div>
            <div class="schema-block__image">
                <?php
                $techHallImg = get_field('technical_plan_image');
                if(!empty($techHallImg)): ?>
                    <img src="<?php echo esc_url($techHallImg['url']); ?>" alt="<?php echo esc_attr($techHallImg['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="container__inner">
        <div class="block-width-fix">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <?php the_content(); ?>
            <?php 
                endwhile;
            endif; 
            ?>
        </div>
    </div>
</section>

<section class="container newsletter-block pb-md pt-md">
    <div class="container__inner newsletter d-grid-2">
        <div class="newsletter__left">
            <?php if(get_field('services_asking_text')): ?>
                <h4><?php the_field('services_asking_text'); ?></h4>
            <?php endif; ?>
        </div>
        <div class="newsletter__right">
            <?php if(get_field('services_form_url')): ?>
            <a href="<?php the_field('services_form_url'); ?>" class="newsletter__btn" id="newsletter__btn">
                <p class="btn btn--dark-blue">
                    <span><?php _e('Ask for details', 'siluteskc'); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#ffffff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </p>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>