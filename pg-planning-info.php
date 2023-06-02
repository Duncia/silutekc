<?php 
/* Template Name: Planning info page */

/*
Planning info page template
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

<section class="container pb-md">
    <div class="container__inner block-width-fix">
        <?php 
            $allInfo = new WP_Query(
                array(
                    'post_type'         => array('planninginfo'), 
                    'post_status'       =>'publish',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                )); 
        ?>
        <div class="admin-info">
            <?php if ( $allInfo->have_posts() ) : ?>
                <?php while ( $allInfo->have_posts() ) : $allInfo->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="admin-info__item">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <h4 class="txt-center"><?php _e('Nėra informacijos', 'siluteskc'); ?></h4>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="container pb-md">
    <div class="container__inner block-width-fix">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
        <?php the_content(); ?>
        <?php 
            endwhile;
        endif; 
        ?>
    </div>
</section>

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>