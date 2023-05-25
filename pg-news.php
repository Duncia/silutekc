<?php 
/* Template Name: News page */

/*
News page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner news pb-md">
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

        <?php 
            $allNews = new WP_Query(
                array(
                    'post_type'         => array('news'), 
                    'post_status'       =>'publish',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                )); 
            $countNews = "";
            if($allNews->found_posts == 2){
                $countNews = "hp-news__items--only-2";
            }
            if($allNews->found_posts <= 1 ){
                $countNews = "hp-news__items--only-1";
            }
        ?>
        <div class="news-gallery pb-md <?php echo $countNews; ?>">

                <?php if ( $allNews->have_posts() ) : ?>
                    <?php while ( $allNews->have_posts() ) : $allNews->the_post(); ?>
            <div class="news-gallery__item">
                <picture>
                    <?php
                        $portraitImg = get_field('news_portrait_home_page_image');
                        if(!empty($portraitImg)): ?>
                        <source srcset="<?php echo esc_url($portraitImg['url']); ?>"
                        media="(min-width: 900px)"
                        />
                    <?php endif; ?> 
                    <?php
                        $eventImg = get_field('news_single_top_image');
                        if(!empty($eventImg)): ?>
                        <img class="news-gallery__item__img" src="<?php echo esc_url($eventImg['url']); ?>" alt="<?php echo esc_attr($eventImg['alt']); ?>"/>
                    <?php endif; ?>
                </picture>
                <div class="news-gallery__item__content">
                    <h4 class="pb-sm news-single__title"><?php echo get_the_date(); ?></h4>
                    <div class="item-content__split">
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>"><?php _e('Learn more', 'siluteskc'); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="txt-center"><?php _e('No news yet', 'siluteskc'); ?></h4>
            <?php endif; ?>
        </div>

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