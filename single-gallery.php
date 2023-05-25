<?php 
/*
 * Template Name: Gallery post
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

<section class="container pb-lr">
    <div class="container__inner gallery-single">
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
        <div class="gallery-single__items">
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

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>